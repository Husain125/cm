<?php
    
    class Api_model extends CI_Model
    {
        
        function __construct()
        {
            parent:: __construct();
        }
        /*Get single row data*/
        public function getSingleRow($table, $condition)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($condition);
            $query = $this->db->get();
            return $query->row();       
        }

         /*Get single row data*/
        public function getSingleRowCloumn($columnName,$table, $condition)
        {
            $this->db->select($columnName);
            $this->db->from($table);
            $this->db->where($condition);
            $query = $this->db->get();
            return $query->row();       
        }

        /*Insert and get last Id*/
        public function insertGetId($table,$data)
        {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }
        /*Check existing record*/
        function checkData($table, $condition, $columnName)
        {
            $this->db->select($columnName);
            $this->db->from($table);
            $this->db->like($condition);
            return $this->db->count_all_results();
        }   

         /*Get All data with where clause*/
        public function getAllDataDistinct($table)
        {   
            $this->db->distinct('user_id');
            $this->db->select('user_id');
            $this->db->from($table);
            $query = $this->db->get();          
            return $query->result();
        }
        
          /*Get no of records*/
        function getCountWhere($table, $condition)
        {
            $this->db->select("*");
            $this->db->from($table);
            $this->db->where($condition);
            return $this->db->count_all_results();
        }   

        /*Check existing record*/
        function getCount($table, $condition)
        {
            $this->db->select("*");
            $this->db->from($table);
            $this->db->where($condition);
            return $this->db->count_all_results();
        }   

         /*Get no of records*/
        function getCountAll($table)
        {
            $this->db->select("*");
            $this->db->from($table);
            return $this->db->count_all_results();
        }

         /*Get All data with Limit*/
        public function getAllDataLimit($table, $limit)
        {
            $this->db->select("*");
            $this->db->from($table);
            $this->db->limit($limit);
            $query = $this->db->get();          
            return $query->result();
        }

         /*Get All data with Limit*/
        public function getAllDataLimitWhere($table, $where, $limit)
        {
            $this->db->select("*");
            $this->db->from($table);
            $this->db->where($where);
            if($page==1)
           {
              $this->db->limit(10, 0);
           }
           else
           {
               $limit= 10*$page;
               $start= ($limit-10);
               $this->db->limit(10, $start);
           }
            $query = $this->db->get();          
            return $query->result();
        }

        /*Update any data*/
         public function updateSingleRow($table, $where, $data)
        {                 
            $this->db->where($where);
            $this->db->update($table, $data);

            if ($this->db->affected_rows() > 0)
            {
              return TRUE;
            }
            else
            {
              return FALSE;
            }
        }

        /*Add new data*/
        function insert($table,$data)
         {
            if($this->db->insert($table, $data))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }

         }

        /*Get All data*/
        public function getAllData($table)
        {
            $this->db->select("*");
            $this->db->from($table);
            $query = $this->db->get();          
            return $query->result();
        }

        /*Get All data with where clause*/
        public function getAllDataWhere($where, $table)
        {
            $this->db->where($where);
            $this->db->select("*");
            $this->db->from($table);
            $query = $this->db->get();          
            return $query->result();
        }

        /*Get All data with where clause*/
        public function getAllDataWhereOrderBy($where, $table,$columnName, $orderBy)
        {
            $this->db->where($where);
            $this->db->select("*");
            $this->db->from($table);
            $this->db->order_by($columnName, $orderBy);
            $query = $this->db->get();          
            return $query->result();
        }


        /*Get All data with where clause*/
        public function getAllDataWhereOrWhere($where,$OrWhere, $table,$page)
        {
            $this->db->where($where);
            $this->db->or_where($OrWhere);
            $this->db->select("*");
            $this->db->from($table);
             if($page==1)
            {
               $this->db->limit(100, 0); 
            }
            else
            {
                $limit= 100*$page;
                $start= ($limit-100);
                $this->db->limit(100, $start);
            }
            $query = $this->db->get();          
            return $query->result();
        }

        /*Get All data with where clause*/
        public function getAllDataWhereDistinct($where, $table)
        {   
            $this->db->distinct('user_pub_id_receiver');
            $this->db->where($where);
            $this->db->select("user_pub_id_receiver");
            $this->db->from($table);
            $query = $this->db->get();         
            return $query->result();
        }

        /*Get All data with where clause*/
        public function getAllDataWhereDistinct1($where, $table)
        {   
            $this->db->distinct('user_pub_id');
            $this->db->where($where);
            $this->db->select("user_pub_id");
            $this->db->from($table);
            $query = $this->db->get();         
            return $query->result();
        }

          /*Get single row data*/
        public function getSingleRowOrderBy($table, $condition)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($condition);
            $this->db->order_by('id', 'desc'); 
            $query = $this->db->get();
            return $query->row();       
        }

         /*Get All data with where clause*/
        public function getAllDataWhereDistinctArtist($where, $table)
        {   
            $this->db->distinct('artist_id');
            $this->db->where($where);
            $this->db->select("artist_id");
            $this->db->from($table);
            $query = $this->db->get();         
            return $query->result();
        }

         // Count avarage 
        public function getAvgWhere($columnName, $table,$where)
        {
            $this->db->select_avg($columnName);
            $this->db->from($table);
            $this->db->where($where);
            $query =$this->db->get(); 
            return $query->result(); 
        }

         // Count avarage 
        public function getTotalWhere($table,$where)
        {
            $this->db->from($table);
            $this->db->where($where);
            $query =$this->db->get(); 
            return $query->num_rows(); 
        }

         // get sum 
        public function getSum($columnName, $table)
        {
            $this->db->select_sum($columnName);
            $this->db->from($table);
            $query =$this->db->get(); 
            return $query->result(); 
        }

        // get sum 
        public function getSumWhere($columnName, $table, $where)
        {
            $this->db->select_sum($columnName);
            $this->db->from($table);
            $this->db->where($where);
            $query =$this->db->get(); 
            return $query->row(); 
        }

        public function deleteRecord($where, $table)
        {
            $this->db-> where($where);
            $query = $this->db->delete($table);  
        } 
        
        public function getNearestData($lat,$lng,$table)
        {
            $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
            $this->db->from($table); 
            $this->db->having('distance <= ', '1');                    
            $this->db->order_by('distance');                    
            $this->db->limit(1, 0);
            $query =$this->db->get(); 
            return $query->row(); 
        }

        public function getNearestDataWhere($lat,$lng,$table,$where,$distance)
        {
            $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
            $this->db->from($table); 
            $this->db->where($where);
            $this->db->having('distance <= ', $distance);                    
            $this->db->order_by('distance');                    
            $query =$this->db->get(); 
            return $query->result(); 
        }

        public function getNearestDataWhereLike($lat,$lng,$table,$where,$keyword,$distance)
        {
            $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
            $this->db->from($table); 
            $this->db->like('tagging', $keyword);
            $this->db->where($where);
            $this->db->having('distance <= ', $distance);                    
            $this->db->order_by('distance');                    
            $query =$this->db->get(); 
            return $query->result(); 
        }


        public function getWhereInStatus($table,$where,$columnName, $where_in)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($where);
            $this->db->where_in($columnName, $where_in);
            $this->db->order_by('id', 'desc');
            $query =$this->db->get(); 
            return $query->row();
        }

        public function getUniquePublicKey($table)
        {
          $var = (rand());
          $var1 = sha1($var);
          $pk = substr($var1,0,16);  
          $condition=array('pub_id'=>$pk);
          $columnName='pub_id';
          $count= $this->checkData($table, $condition, $columnName);
          if($count>0)
          {
            $this->getUniquePublicKey($table);  
          }
          else
          {
            return $pk;
          }
        }

        public function getDatabyKeywords($table , $keyword, $page, $table2, $condition)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->or_like($keyword);
            $this->db->where('status=1');
            if($page==1)
            {
              $this->db->limit(10, 0);
            }
            else
            {
             $limit= 10*$page;
             $start= ($limit-10);
             $this->db->limit(10, $start);
            }            
            $query= $this->db->get();
            return $query->result();
        }

        public function getDatabyKeywordsDistance($lat, $lng, $table , $keyword, $page, $table2, $condition, $distance)
        {
            $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
            $this->db->from($table);
            $this->db->or_like($keyword);
            $this->db->where('status=1');
            $this->db->having('distance <= ', $distance);                    
            $this->db->order_by('distance'); 
            $query= $this->db->get();
            return $query->result();
        }

        public function getDatabyJoin($table , $page, $table2, $condition)
        {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where('status=1');
            if($page==1)
             {
                $this->db->limit(10, 0);
             }
             else
             {
                 $limit= 10*$page;
                 $start= ($limit-10);
                 $this->db->limit(10, $start);
             } 
            $query= $this->db->get();
            return $query->result();
        }
        public function getDatabyLimit($table , $page)
        {
            $this->db->select('*');
            $this->db->from($table);
            if($page==1)
               {
                  $this->db->limit(10, 0);
               }
               else
               {
                   $limit= 10*$page;
                   $start= ($limit-10);
                   $this->db->limit(10, $start);
               } 
            $query= $this->db->get();
            return $query->result();
        }
    public function getRecord($rowno,$rowperpage) {
      $this->db->select('*');
      $this->db->from('product');
          $this->db->limit($rowperpage, $rowno);
      $query = $this->db->get();
      return $query->result_array();
    }
    public function getRecordCount() {
     $this->db->select('count(*) as allcount');
      $this->db->from('product');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result[0]['allcount'];
  }
}
?>       