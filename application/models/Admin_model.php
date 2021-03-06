<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/10/15
 * Time: 15:22
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        return $this->load->database();
    }

    function check_admin($uid, $username)
    {
        $this->db->where('admin_name', $username);
        $this->db->where('uid', $uid);
        $this->db->select('uid');
        $query = $this->db->get('ss_admin');
        if ($query->num_rows() > 0)
        {
            return (bool) true;
        }
        else
        {
            return (bool) false;
        }
    }

    function u_select($username)
    {
        $this->db->where('admin_name', $username);
        $this->db->select('*');
        $query = $this->db->get('ss_admin');
        return $query->result();
    }

    function c_nodes()
    {
        return $this->db->count_all('ss_node');
    }

    function c_users()
    {
        return $this->db->count_all('user');
    }

    function get_users($uid = null)
    {
        if ($uid)
        {
            $this->db->where('uid',$uid);
        }
        $this->db->select('uid, user_name, email, pass, passwd, t, u, d, plan, transfer_enable, port, switch, enable, last_check_in_time, reg_date, expire_date, history_transfer');
        return $this->db->get('user')->result();
    }

    function c_active_users()
    {
        $this->db->where('t >', '0');
        return $this->db->count_all_results('user');
    }

    function get_month_traffic()
    {
        $this->db->select_sum('u');
        $query = $this->db->get('user');
        $u = $query->result()[0]->u;
        $this->db->select_sum('d');
        $query = $this->db->get('user');
        $d = $query->result()[0]->d;
        return $u + $d;
    }

    function c_user_time($time)
    {
        $now = time();
        $time = $now - $time;
        $this->db->where('t >', $time);
        return $this->db->count_all_results('user');
    }

    function get_version()
    {
        $this->db->where('option_name', 'version');
        $query = $this->db->get('options');
        if ($query->num_rows() > 0)
        {
            return $query->result()[0]->option_value;
        }
        return 0;
    }

    function add_code($sub,$type,$num)
    {
        $datas = array();
        for($a=0;$a<$num;$a++)
        {
            $x = rand(10, 1000);
            $z = rand(10, 1000);
            $x = md5($x).md5($z);
            $x = base64_encode($x);
            $code = $sub.substr($x, rand(1, 13), 24);
            //analyze subcode
            // 默认一个月有效期
            $default_period = 2592000; 
            $period = $default_period;
            // 默认流量,从配置里读取
            $this->db->where('option_name', 'default_transfer');
            $query = $this->db->get('options');
            if ($query->num_rows() > 0)
            {
                $default_transfer = $query->result()[0]->option_value;
            }
            else  //500M
            {
                $default_transfer = 500*1024*1024;
            }
            
            if($sub == 'TST' || $sub == 'TEST')  //试用套餐邀请码
            {
              $period = 24 * 3600 * 14;  //2个星期
              $transfer = 1024 * 1024 * 1024 * 2;  //2个G
            }
            
            elseif($sub == 'T1G')  //1G流量
            {
              $period = 0;  //不延长有效期
              $transfer =   1024 * 1024 * 1024 * 1;  //1个G
            }
            
             elseif($sub == 'T2G')  //2G流量
            {
              $period = 0;  //不延长有效期
              $transfer =   1024 * 1024 * 1024 * 2;  //2个G
            }

            elseif($sub == 'T5G')  //5G流量
            {
              $period = 0;  //不延长有效期
              $transfer =   1024 * 1024 * 1024 * 5;  //5个G
            }
            
            elseif($sub == 'T10G')  //10G流量
            {
              $period = 0;  //不延长有效期
              $transfer =   1024 * 1024 * 1024 * 10;  //10个G
            }
            
            elseif($sub == 'MA')  //A套餐
            {
              $period = $default_period;  //一个月
              $transfer =  $default_transfer;
            }
            elseif($sub == 'MB') //B套餐
            {
               $period = $default_period * 3; //一季度    
               $transfer =  $default_transfer * 3;
            }
            elseif($sub == 'MC') //C套餐
            {
                $period = $default_period * 6; //半年   
                $transfer =  $default_transfer * 6;
            }
            elseif($sub == 'MD') //B套餐
            {
                $period = $default_period * 12; //一年
                $transfer =  $default_transfer * 12;
            }
            
            else{  //非套餐，非试用账号
                $transfer = $default_transfer;
                $period = $default_period;
            }
            
            $data = array(
                'code' => $code,
                'user' => $type,
                'period' => $period,
                'transfer' => $transfer
            );
            array_push($datas, $data);
        }
        return $this->db->insert_batch('invite_code', $datas);
    }

    function get_invite_codes()
    {
        $this->db->where('user', '1');
        $this->db->where('used', '0');
        $query = $this->db->get('invite_code');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return (bool) false;
        }
    }

    function get_nodes($id = null)
    {
        if ($id)
        {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('ss_node');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        return false;
    }

    function del_node($id)
    {
        $this->db->where('id', $id);
        $this->db->limit(1);
        return $this->db->delete('ss_node');
    }

    function del_user($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->limit(1);
        return $this->db->delete('user');
    }

    function update_node($mode = "insert", $id = null, $node_name, $node_server, $node_info, $node_type, $node_status, $node_order )
    {
        if ($mode == "update")
        {
            if ($id)
            {
                $this->db->where('id', $id);
                $data = array(
                    'node_name' => $node_name,
                    'node_server' => $node_server,
                    'node_info' => $node_info,
                    'node_type' => $node_type,
                    'node_status' => $node_status,
                    'node_order' => $node_order
                );
                return $this->db->update('ss_node', $data);
            }
            else
            {
                return false;
            }
        }
        else
        {
            $data = array(
                'node_name' => $node_name,
                'node_server' => $node_server,
                'node_info' => $node_info,
                'node_type' => $node_type,
                'node_status' => $node_status,
                'node_order' => $node_order
            );
            return $this->db->insert('ss_node', $data);
        }
    }

    function update_user($mode = "insert", $uid = null, $user_name, $email, $pass, $passwd, $u, $d, $transfer_enable, $plan, $port, $switch, $enable , $expire_date)
    {
        if ($mode == "update")
        {
            if ($uid)
            {
                $this->db->where('uid', $uid);
                $data = array(
                    'user_name' => $user_name,
                    'email' => $email,
                    'pass' => $pass,
                    'passwd' => $passwd,
                    'u' => $u,
                    'd' => $d,
                    'transfer_enable' => $transfer_enable,
                    'plan' => $plan,
                    'port' => $port,
                    'switch' => $switch,
                    'enable' => $enable,
	            'expire_date' => $expire_date
                );
                return $this->db->update('user', $data);
            }
            else
            {
                return false;
            }
        }
        else
        {
            $data = array(
                'user_name' => $user_name,
                'email' => $email,
                'pass' => $pass,
                'passwd' => $passwd,
                't' => '0',
                'u' => $u,
                'd' => $d,
                'transfer_enable' => $transfer_enable,
                'plan' => $plan,
                'port' => $port,
                'switch' => $switch,
                'enable' => $enable,
                'user_name' => $username,
                'type' => '7',
                'invite_num' => $this->get_default_invite_number(),
                'money' => '0'
            );
            return $this->db->insert('user', $data);
        }
    }

    function get_default_invite_number()
    {
        $this->db->where('option_name', 'default_invite_number');
        $query = $this->db->get('options');
        return (int) $query->result()[0]->option_value;
    }

    function get_config()
    {
        $query = $this->db->get('options');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function update_config($data)
    {
        return $this->db->update_batch('options', $data, 'option_name');
    }
}
