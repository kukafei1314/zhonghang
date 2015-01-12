<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author LZZ
 */
class Article_list_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
   }
   
   public function query_article($tid)
   {
       $sql = "SELECT * FROM `zh_articles` WHERE `type` = $tid";
       $query = $this->db->query($sql);
       return $query->result_array();
   }
   
   public function add_article($article)
   {
       $this->db->insert('zh_articles', $article);
   }
   
   public function delete_article($aid)
   {
       $this->db->where('aid',$aid);
       if($this->db->delete('zh_articles') == FALSE)
           return FALSE;
       else
           return TRUE;
   }
   
   public function get_article($aid)
   {
       $sql = "SELECT * FROM `zh_articles` WHERE `aid` = $aid";
       $query = $this->db->query($sql);
       return $query->row_array();
   }
   
   public function update_article($article)
   {
       $this->db->where('aid',$article['aid']);
       $this->db->update('zh_articles',$article);
   }
}
