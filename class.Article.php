<?
class Wawi_Article extends DBObj {
  protected static $__table="wawi_articles";
  public static $mod="wawi";
  public static $sub="articles";
  
  public static $elements=array(
    "sku"=>array("title"=>"SKU/Art.Nr","mode"=>"string","dbkey"=>"sku"),
    "shortdesc"=>array("title"=>"Kurzbeschreibung","mode"=>"string","dbkey"=>"shortdesc"),
    "longdesc"=>array("title"=>"Langbeschreibung","mode"=>"text","dbkey"=>"longdesc"),
    "remarks"=>array("title"=>"Bemerkungen","mode"=>"text","dbkey"=>"remarks"),
  );
  
  public static $link_elements=array(
  );
  public static $list_elements=array(
    "sku",
    "shortdesc",
    "remarks",
  );
  public static $detail_elements=array(
    "sku",
    "shortdesc",
    "longdesc",
    "remarks",
  );
  public static $edit_elements=array(
    "sku",
    "shortdesc",
    "longdesc",
    "remarks",
  );
  public static $links=array(
//    "User"=>array("title"=>"Mitglieder","table"=>"link_users_groups"),
  );
  public static $one2many=array(
    "Wawi_Price"=>array("title"=>"Preise"),
    "Wawi_Barcode"=>array("title"=>"Barcodes"),
  );
  public function processProperty($key) {
    $ret=NULL;
    switch($key) {
    }
    return $ret;
  }
}

plugins_register_backend_handler($plugin,"articles","list",array("Wawi_Article","listView"));
plugins_register_backend_handler($plugin,"articles","edit",array("Wawi_Article","editView"));
plugins_register_backend_handler($plugin,"articles","view",array("Wawi_Article","detailView"));
plugins_register_backend_handler($plugin,"articles","submit",array("Wawi_Article","processSubmit"));
