<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}
    
    //Check username availability
    public function checkUserName($username){
        //write select query to fetch data from tbl_user table
        $query = "SELECT * FROM tbl_user WHERE username = '$username'";
        //pass this query through select() method to Database.php file
        $getuser = $this->db->select($query);
        
        //validation
        if($username == ""){
            echo "<span class='error'>Please Enter Username !</span>";
            exit();
        }elseif($getuser){
            echo "<span class='error'><b>$username</b> not available !</span>";
            exit();
        }else{
            echo "<span class='success'><b>$username</b> available !</span>";
            exit();
        }
    }
    
    
    
    //fetch data from database
    public function checkSkill($skill){
        //write select query to fetch data from tbl_skill table
        $query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
        //pass this query through select() method to Database.php file
        $getskill = $this->db->select($query);
        
        $result = "";
        $result .= "<div class='skill'><ul>";
        //if data found then hold all skill which is match with typing letter
        if($getskill){
            while($data = $getskill->fetch_assoc()) {
                $result .= "<li>".$data['skill']."</li>";
            }
        } else{
            $result .= "<li>No Result Found !</li>";
        }
        $result .= "</ul></div>";
        echo $result;
    }
    
    
    
    
    //Insert data to database
    public function autoInsert($conttxt){
        //write insert query
        $query = "INSERT INTO tbl_post(content) VALUES('$conttxt')";
        //call insert() method from Database.php page
        $data = $this->db->insert($query);
    }
    
    
    
    //Select/Get data from database
    public function getDataWithoutRefresh(){
        //write select query to fetch data from tbl_skill table
        $query = "SELECT * FROM tbl_post ORDER BY id DESC";
        //pass this query through select() method to Database.php file
        $getcontent = $this->db->select($query);
        
        $result = "";
        $result .= "<div class='data'><ul>";
        //if data found then hold all skill which is match with typing letter
        if($getcontent){
            while($data = $getcontent->fetch_assoc()) {
                $result .= "<li>".$data['content']."</li>";
            }
        } else{
            $result .= "<li>No Data Found !</li>";
        }
        $result .= "</ul></div>";
        echo $result;
    }
    
    
    
    
    
    //Live search fetch data from database without page reload
    public function liveSearch($search){
        //write select query to fetch data from tbl_searchdata table
        $query = "SELECT * FROM tbl_searchdata WHERE username LIKE '%$search%'";
        //pass this query through select() method to Database.php file
        $getdata = $this->db->select($query);
        
        if($getdata){
            $data = "";
            $data .='<table class="tblone">
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>';
                //
                while($result = $getdata->fetch_assoc()){
                    $data .='<tr>
                                <td>'.$result["username"].'</td>
                                <td>'.$result["name"].'</td>
                                <td>'.$result["email"].'</td>
                            </tr>';
                }
                echo $data;
            
        } else{
            echo "<span class='error'>Data not found.</span>";
        }
    }
    
    
    
    
    
    
    //Auto Save & Update Data inside database
    public function contentAutoSave($content, $contentid){
        if($contentid != ''){
            //write update query
            $query = "UPDATE tbl_autosave SET content = '$content' WHERE contentid = '$contentid' ";
            //execute query
            $update_row = $this->db->update($query);
        } else{
            //write insert query
            $query = "INSERT INTO tbl_autosave(content, status) VALUES('$content', 'draft')";
            //execute query
            $insertdata = $this->db->insert($query);
            //hold last contentid which is used for update content every 10000 miliseconds
            $lastid = $this->db->link->insert_id;
            echo $lastid;
            exit();
        }
    }

	
}
?>