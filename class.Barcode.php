<?
class Wawi_Barcode extends DBObj {
  protected static $__table="wawi_barcodes";
  public static $mod="wawi";
  public static $sub="barcodes";
  
  public static $elements=array(
    "code"=>array("title"=>"Barcode","mode"=>"string","dbkey"=>"code"),
    "wawi_articles_id"=>array("title"=>"Artikel-ID","mode"=>"text","dbkey"=>"wawi_articles_id"),
  );
  
  public static $link_elements=array(
  );
  public static $list_elements=array(
    "code",
    "wawi_articles_id",
  );
  public static $detail_elements=array(
    "code",
    "wawi_articles_id",
  );
  public static $edit_elements=array(
    "code",
    "wawi_articles_id",
  );
  public static $links=array(
  );
  public function processProperty($key) {
    $ret=NULL;
    switch($key) {
    }
    return $ret;
  }
}

plugins_register_backend_handler($plugin,"barcodes","list",array("Wawi_Barcode","listView"));
plugins_register_backend_handler($plugin,"barcodes","edit",array("Wawi_Barcode","editView"));
plugins_register_backend_handler($plugin,"barcodes","view",array("Wawi_Barcode","detailView"));
plugins_register_backend_handler($plugin,"barcodes","submit",array("Wawi_Barcode","processSubmit"));
plugins_register_backend_handler($plugin,"barcodes","delete",array("Wawi_Barcode","processDelete"));
