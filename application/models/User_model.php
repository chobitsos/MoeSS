<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 16:46
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        return;
    }

    function u_select($username)
    {
        $this->db->where('user_name', $username);
        $this->db->select('uid, user_name, pass, email');
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
        {
            return $query->result()[0];
        }
        else
        {
            return false;
        }
    }

    function need_invite()
    {
        $this->db->where('option_name', 'invite_only');
        $query = $this->db->get('options');
        if ( $query->result()[0]->option_value == 'true' )
        {
            return (bool) true;
        }
        else
        {
            return (bool) false;
        }
    }

    function get_default_transfer()
    {
        $this->db->where('option_name', 'default_transfer');
        $query = $this->db->get('options');
        return $query->result()[0]->option_value;
    }

    function get_default_invite_number()
    {
        $this->db->where('option_name', 'default_invite_number');
        $query = $this->db->get('options');
        return (int) $query->result()[0]->option_value;
    }

    function get_last_port()
    {
        $this->db->select('port');
        $this->db->order_by('uid', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user');
        return $query->result()[0]->port;
    }

    function deactive_code($invitecode, $username)
    {
        $data = array(
            'used' => (bool) true,
            'user_name' => $username
            );
        $this->db->where('code', $invitecode);
        return $this->db->update('invite_code', $data );
    }

    function new_user($username, $password, $email, $invitecode = null)
    {
        if ($invitecode)
        {
            $this->deactive_code($invitecode, $username);
        }
        $this->load->helper('comm');
        $data = array(
            'user_name' => $username,
            'email' => $email,
            'pass' => $password,
            'passwd' => get_temp_pass(),
            't' => '0',
            'u' => '0',
            'd' => '0',
            'plan' => 'A',
            'transfer_enable' => $this->get_default_transfer(),
            'port' => $this->get_last_port() + rand( 2, 7 ),
            'switch' => '0',
            'enable' => '0',
            'type' => '7',
            'invite_num' => $this->get_default_invite_number(),
            'money' => '0'
        );
        $this->db->set('reg_date', 'NOW()', FALSE);
        return $this->db->insert('user', $data);
    }

    function valid_code($invitecode)
    {
        $this->db->where('code', $invitecode);
        $query = $this->db->get('invite_code');
        if ($query->num_rows() > 0)
        {
            return (bool) !$query->result()[0]->used;
        }
        else
        {
            return (bool) false;
        }
    }

    function u_info( $username )
    {
        $this->db->where('user_name', $username);
        $this->db->select('t, u, d, plan, transfer_enable, passwd, port, enable, last_check_in_time');
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
        {
            return $query->result()[0];
        }
        else
        {
            return (bool) false;
        }
    }

    function u_basic_info( $username )
    {
        $this->db->where('user_name', $username);
        $this->db->select('email, plan, money');
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
        {
            return $query->result()[0];
        }
        else
        {
            return (bool) false;
        }
    }

    function get_nodes( $test = false )
    {
        if ($test)
        {
            $this->db->where('node_type', '1');
        }
        else
        {
            $this->db->where('node_type', '0');
        }
        $this->db->order_by('node_order', 'ASC');
        $query = $this->db->get('ss_node');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return (bool) false;
        }
    }

    function get_invite_codes()
    {
        $this->db->where('user', '2');
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

    function profile_update($uid, $username, $nowpassword, $password, $email)
    {
        $this->db->where('uid', $uid);
        $this->db->where('user_name', $username);
        $this->db->where('pass', $nowpassword);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
        {
            $data = array(
                'pass' => $password,
                'email' => $email
            );
            if ( !$password )
            {
                unset($data['pass']);
            }
            if ( !$email || $email == "" )
            {
                unset($data['email']);
            }
            $this->db->where('uid', $uid);
            return $this->db->update('user', $data );
        }
        else
        {
            return (bool) false;
        }
    }

    function change_ss_pass($uid, $username, $pass)
    {
        $data = array( 'passwd' => $pass );
        $this->db->where('uid', $uid);
        $this->db->where('user_name', $username);
        return $this->db->update('user', $data );
    }

    function check_in($username)
    {
        $this->db->where('option_name', 'check_min');
        $this->db->select('option_value');
        $query = $this->db->get('options');
        if ($query->num_rows() > 0)
        {
            $check_min = $query->result()[0]->option_value;
        }
        else
        {
            $check_min = 50;
        }

        $this->db->where('option_name', 'check_max');
        $this->db->select('option_value');
        $query = $this->db->get('options');
        if ($query->num_rows() > 0)
        {
            $check_max = $query->result()[0]->option_value;
        }
        else
        {
            $check_max = 100;
        }

        $transfer_to_add = rand($check_min,$check_max);
        $this->add_transfer($username, $transfer_to_add  * 1024 * 1024 );
        $data = array( 'last_check_in_time' => time() );
        $this->db->where('user_name', $username);
        $this->db->update('user', $data);
        return $transfer_to_add;
    }

    function get_transfer_enable($username)
    {
        if ($username)
        {
            $this->db->where('user_name', $username);
            $this->db->select('transfer_enable');
            return $this->db->get('user')->result()[0]->transfer_enable;
        }
        return (bool) false;
    }

    function add_transfer($username = null, $amount)
    {
        $transfer = $this->get_transfer_enable($username) + $amount;
        $data = array( 'transfer_enable' => $transfer );
        if ( $username )
        {
            $this->db->where('user_name', $username);
        }
        return $this->db->update( 'user', $data );
    }

    function send_active_email($username)
    {
        $user = $this->u_select($username);
        if ($user)
        {
            $x = $user->user_name;
            $y = $user->pass;
            $z = rand(10, 1000);
            $x = md5($x).md5($y).md5($z);
            $x = base64_encode($x);
            $code = substr($x, rand(1, 13), 24);
            $data = array(
                'activate_code' => $code,
                'uid' => $user->uid,
                'user_name' => $user->user_name,
                'email' => $user->email,
                'used' => 0
            );
            $this->db->insert('activate', $data);

            $this->db->where('option_name', 'mail_protocol');
            $query = $this->db->get('options');
            if ($query->num_rows() > 0)
            {
                $config['protocol'] = $query->result()[0]->option_value;
                if ($config['protocol'] == 'sendmail')
                {
                    $this->db->where('option_name', 'mail_mailpath');
                    $query = $this->db->get('options');
                    $config['mailpath'] = $query->result()[0]->option_value;
                }
                elseif ($config['protocol'] == 'smtp')
                {
                    $this->db->where('option_name', 'mail_smtp_host');
                    $query = $this->db->get('options');
                    $config['smtp_host'] = $query->result()[0]->option_value;
                    $this->db->where('option_name', 'mail_smtp_user');
                    $query = $this->db->get('options');
                    $config['smtp_user'] = $query->result()[0]->option_value;
                    $this->db->where('option_name', 'mail_smtp_pass');
                    $query = $this->db->get('options');
                    $config['smtp_pass'] = $query->result()[0]->option_value;
                    $this->db->where('option_name', 'mail_smtp_port');
                    $query = $this->db->get('options');
                    $config['smtp_port'] = $query->result()[0]->option_value;
                    $this->db->where('option_name', 'mail_smtp_crypto');
                    $query = $this->db->get('options');
                    $config['smtp_crypto'] = $query->result()[0]->option_value;
                }
                elseif ($config['protocol'] == 'sendgrid')
                {
                    $url = 'https://api.sendgrid.com/';
                    $this->db->where('option_name', 'mail_sg_user');
                    $query = $this->db->get('options');
                    $api_user = $query->result()[0]->option_value;
                    $this->db->where('option_name', 'mail_sg_pass');
                    $query = $this->db->get('options');
                    $api_pass = $query->result()[0]->option_value;
                    $html = "<html>
                        <head></head>
                        <body>
                        <p>请点击下方链接激活账户：<br>
                        <a href=\"".site_url("user/activate/$code")."\" target=\"_blank\">激活账户</a>
                        </p>
                        </body>
                    </html>";
                    $this->db->where('option_name', 'mail_sender_address');
                    $query = $this->db->get('options');
                    $sender_address = $query->result()[0]->option_value;
                    $params = array(
                        'api_user' => $api_user,
                        'api_key' => $api_pass,
                        'to' => $user->email,
                        'subject' => '[ACTION REQUIRED] Activate your account',
                        'html' => $html,
                        'from' => $sender_address,
                    );

                    $request = $url.'api/mail.send.json';
                    $session = curl_init($request);
                    curl_setopt ($session, CURLOPT_POST, true);
                    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($session, CURLOPT_HEADER, false);
                    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($session);
                    curl_close($session);
                    $response = json_decode($response);
                    if ($response->message == "success")
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }

                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $config['crlf'] = '\r\n';
                $config['newline'] = '\r\n';
                $this->load->library('email');
                $this->email->initialize($config);

                $this->db->where('option_name', 'mail_sender_address');
                $query = $this->db->get('options');
                $sender_address = $query->result()[0]->option_value;
                $this->db->where('option_name', 'mail_sender_name');
                $query = $this->db->get('options');
                $sender_name = $query->result()[0]->option_value;
                $this->email->from($sender_address, $sender_name);
                $this->email->to($user->email);
                $this->email->subject('Please verify your account');
                $this->email->message('<a href="'.site_url("user/activate/$code").'" target="_blank">Click Here!</a>');
                return $this->email->send();
            }
        }
        else
        {
            return false;
        }
    }

    function activate($code)
    {
        $this->db->where('activate_code', $code);
        $query = $this->db->get('activate');
        if ($query->num_rows() > 0 && !$query->result()[0]->used)
        {
            $data = array('used' => 1 );
            $this->db->where('activate_code', $code);
            $this->db->limit(1);
            $this->db->update('activate',$data);

            $result = $query->result()[0];
            $data = array(
                'switch' => 1,
                'enable' => 1
            );
            $this->db->where('uid', $result->uid);
            $this->db->where('user_name', $result->user_name);
            $this->db->where('email', $result->email);
            $this->db->limit(1);
            return $this->db->update('user',$data);
        }
        else
        {
            return false;
        }
    }
}
