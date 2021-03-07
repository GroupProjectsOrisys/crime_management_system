<?php
  class CrimeModel extends CI_Model
  {
    public function enc_pass($pass)
    {
      return password_hash($pass,PASSWORD_BCRYPT);
    }
    public function insert_public($a,$b)
    {
      $this->db->insert('login_tb',$b);
      $loginid=$this->db->insert_id();
      $a['login_id']=$loginid;
      $this->db->insert('public_reg',$a);
    }
    public function select_data()
    {
        $this->db->select('*');
        $qry=$this->db->join("public_reg","login_tb.login_id=public_reg.login_id",'inner');
        $qry=$this->db->get("login_tb");
        return $qry;
    }
    public function insert_police($a,$b)
    {
      $this->db->insert('login_tb',$b);
      $loginid=$this->db->insert_id();
      $a['login_id']=$loginid;
      $this->db->insert('poilicestation_tb',$a);
    }
    public function select_dataP()
    {
      $this->db->select('*');
      $qry=$this->db->join("poilicestation_tb","login_tb.login_id=poilicestation_tb.login_id",'inner');
      $qry=$this->db->get("login_tb");
      return $qry;
    }
    public function insert_court($a,$b)
    {
      $this->db->insert('login_tb',$b);
      $loginid=$this->db->insert_id();
      $a['login_id']=$loginid;
      $this->db->insert('court_tbl',$a);

    }
    public function select_dataC()
    {
      $this->db->select('*');
      $qry=$this->db->join("court_tbl","login_tb.login_id=court_tbl.login_id",'inner');
      $qry=$this->db->get("login_tb");
      return $qry;
    }
    public function login_check($email,$pass)
    {
      $this->db->select('password');
      $this->db->from('login_tb');
      $this->db->where('email',$email);
      $pas=$this->db->get()->row('password');
      return $this->verifyPass($pass,$pas);
    }
    public function verifyPass($pass,$pas)
    {
      return password_verify($pass,$pas);
    }
    public function getuserID($email)
    {
      $this->db->select('login_id');
      $this->db->from('login_tb');
      $this->db->where('email',$email);
      return $this->db->get()->row('login_id');
    }
    public function getUser($id)
    {
      $this->db->select('*');
      $this->db->from('login_tb');
      $this->db->where("login_id",$id);
      return $this->db->get()->row();
    }
    public function approve_public($id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'1');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function reject_public($id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'2');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function approve_police($id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'1');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function reject_police($id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'2');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function approve_court($id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'1');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function reject_court($id)
    {  
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->set("status",'2');
      $qry=$this->db->update("login_tb");
      return $qry;
    }
    public function view_police_pro($id)
    {
      $this->db->select('*');
      $this->db->join("login_tb","poilicestation_tb.login_id=login_tb.login_id",'inner');
      $qry=$this->db->where("poilicestation_tb.login_id",$id);
      $qry=$this->db->get("poilicestation_tb");
      return $qry;
    }
    public function update_police($a,$b,$id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->update("login_tb",$b);
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->update("poilicestation_tb",$a);
      return $qry;
    }
    public function view_public_pro($id)
    {
      $this->db->select('*');
      $this->db->join("login_tb","public_reg.login_id=login_tb.login_id",'inner');
      $qry=$this->db->where("public_reg.login_id",$id);
      $qry=$this->db->get("public_reg");
      return $qry;
    }
    public function update_public($a,$b,$id)
    {
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->update("login_tb",$b);
      $qry=$this->db->where("login_id",$id);
      $qry=$this->db->update("public_reg",$a);
      return $qry;
    }
    public function view_name($id)
    {
      $this->db->select('*');
      $this->db->join("login_tb","public_reg.login_id=login_tb.login_id",'inner');
      $qry=$this->db->where("public_reg.login_id",$id);
      $qry=$this->db->get("public_reg");
      return $qry;
    }
    public function insert_complaint($a,$id)
    {
      $this->db->select('district');
      $this->db->from('public_reg');
      $this->db->where('login_id',$id);
      $dist=$this->db->get()->row('district');
      $a['district']=$dist;
      $this->db->insert("case_tb",$a);
    }
    public function view_complaint_byPub($id)
    {
      $this->db->select('*');
      $qry=$this->db->where('login_id',$id);
      $qry=$this->db->get("case_tb");
      return $qry;
    }
    public function viewComplaint_police($id)
    {
      $this->db->select('district');
      $this->db->from('poilicestation_tb');
      $this->db->where('login_id',$id);
      $dist=$this->db->get()->row('district');
      $this->db->select("*");
      $this->db->join("public_reg","public_reg.login_id=case_tb.login_id",'inner');
      $qry=$this->db->where("public_reg.district",$dist);
      $qry=$this->db->get("case_tb");
      return $qry;
    }
    public function take_action_byPolice($id)
    {
      $qry=$this->db->where("complaint_id",$id);
      $qry=$this->db->set("case_status",'1');
      $qry=$this->db->update("case_tb");
      return $qry;
    }
    public function solved_case_byPolice($id)
    {
      $qry=$this->db->where("complaint_id",$id);
      $qry=$this->db->set("case_status",'2');
      $qry=$this->db->update("case_tb");
      return $qry;
    }
    public function delete_complaint_byPub($id)
    {
      $this->db->where("complaint_id",$id);
      $this->db->delete("case_tb");

    }
    public function pass_to_court_byPolice($id)
    {   
      $qry=$this->db->where("complaint_id",$id);
      $qry=$this->db->set("case_status",'3');
      $qry=$this->db->update("case_tb");
      return $qry;
    }
    public function view_complaint_details($cid,$lid)
    {
      $this->db->select('*');
      $this->db->join("poilicestation_tb","poilicestation_tb.district=case_tb.district",'inner');
      $this->db->where('case_tb.complaint_id',$cid);
      $this->db->where('poilicestation_tb.login_id',$lid);
      $qry=$this->db->get('case_tb');
      return $qry;

    }
    public function add_case_report($a,$id)
      {
      $this->db->select('district');
      $this->db->from('poilicestation_tb');
      $this->db->where('login_id',$id);
      $dist=$this->db->get()->row('district');
      $a['district']=$dist;
      $this->db->insert("case_reg_court",$a);
    }
    public function select_caseForCourt($id)
    {
      $this->db->select("*");
      $this->db->join("court_tbl","court_tbl.district=case_reg_court.district",'inner');
      $qry=$this->db->where("court_tbl.login_id",$id);
      $qry=$this->db->get("case_reg_court");
      return $qry;
    }
    public function take_action_byCourt($id)
    {
      $this->db->select('comp_id');
      $this->db->from('case_reg_court');
      $this->db->where('report_id',$id);
      $comp_id=$this->db->get()->row('comp_id');
      $qry=$this->db->where("complaint_id",$comp_id);
      $qry=$this->db->set("case_status",'4');
      $qry=$this->db->update("case_tb");
      $qry=$this->db->where("report_id",$id);
      $qry=$this->db->set("courtCases_status",'1');
      $qry=$this->db->update("case_reg_court");
      return $qry;
    }
    public function solvedCase_byCourt($id)
    {
      $this->db->select('comp_id');
      $this->db->from('case_reg_court');
      $this->db->where('report_id',$id);
      $comp_id=$this->db->get()->row('comp_id');
      $qry=$this->db->where("complaint_id",$comp_id);
      $qry=$this->db->set("case_status",'5');
      $qry=$this->db->update("case_tb");
      $qry=$this->db->where("report_id",$id);
      $qry=$this->db->set("courtCases_status",'2');
      $qry=$this->db->update("case_reg_court");
      return $qry;
    }
    public function select_caseStatusforPolice($id)
    {
      $this->db->select("*");
      $this->db->join("case_reg_court","poilicestation_tb.district=case_reg_court.district",'inner');
      $qry=$this->db->where("poilicestation_tb.login_id",$id);
      $qry=$this->db->get("poilicestation_tb");
      return $qry;
    }
  }
?>