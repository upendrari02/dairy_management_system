<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class model_team extends CI_Model {



	function __construct(){



		parent::__construct();

	}

    public function select_team(){

        $this->db->select('*');
        $this->db->from('team_member');
        $this->db->where('user_id !=' , '1');
        $data = $this->db->get();
        return $data->result();

    }

	public function add_team_submit($name,$eamil,$number,$role,$user_name,$pass1){

            date_default_timezone_set('Asia/Kolkata');
            $date = new DateTime();
            $time_stamp = $date->format('Y-m-d H:i:s');
            $check = $this->db->get_where('team_member', array('user_name' => $user_name));

            if($check->num_rows() >= 1){

                return "exist";
            }else{
			$arr = array(

		    'name' => $name,
			'email' => $eamil,
            'role' =>  $role,
            'user_name' => $user_name,
            'password' =>  $pass1,
			'contact' => $number,
            'ragistration_date' => $time_stamp,

		    );

		    if($this->db->insert('team_member',$arr)){
					$my_team_id = $this->db->insert_id();

			   $arr2 = array(
						'agent_id' => $my_team_id,
					   'lat'  => '',
					   'lng'  => '',
			    );

			   if($this->db->insert('agent_location',$arr2)){
				     redirect('./team/?001');
			   }else{
				     redirect('./team/add_team');
			   }
		    }else{

			   redirect('./team/add_team');
		    };
         }

	}

    public function edit_team($team_id){
        $this->db->select('*');
        $this->db->from('team_member');
        $this->db->where('user_id',$team_id);
        $data = $this->db->get();
        return $data->result();
    }

    public function edit_team_submit($name,$email,$number,$role,$user_name,$pass1,$team_id){
         $check = $this->db->get_where('team_member', array('user_id !=' => $team_id, 'user_name' => $user_name ));

            if($check->num_rows() >= 1){

                return "exist";
            }else{

        $arr = array(

		    'name' => $name,
			'email' => $email,
            'role' =>  $role,
            'user_name' => $user_name,
            'password' =>  $pass1,
			'contact' => $number,

		    );
		    $this->db->where('user_id',$team_id);
		    if($this->db->update('team_member',$arr)){

		    	redirect('./team?002');
		    }else{

			    redirect('./team/edit_team/'.$team_id);
		    };
            }
    }

    public function delete_team_member($del_id){

        $this->db->where('user_id',$del_id);
        if($this->db->delete('team_member')){

            echo 'success';
        }else{
            echo 'failed';
        }
    }


}
