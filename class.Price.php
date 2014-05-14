<?
class Wawi_Price extends DBObj {
  protected static $__table="wawi_prices";
  public static $mod="wawi";
  public static $sub="prices";
  
  public static $elements=array(
    "article_id"=>array("title"=>"Artikelnummer","mode"=>"string","dbkey"=>"wawi_articles_id","data"=>"number"),
    "min_quant"=>array("title"=>"Mindestanzahl","mode"=>"string","dbkey"=>"min_quant","data"=>"number"),
    "price"=>array("title"=>"Einzelpreis netto (CENT!)","mode"=>"string","dbkey"=>"price","data"=>"number"),
    "price_fmt"=>array("title"=>"Einzelpreis netto","mode"=>"process"),
    "price_vat"=>array("title"=>"Einzelpreis brutto","mode"=>"process"),
    "price_vat_fmt"=>array("title"=>"Einzelpreis brutto (CENT!)","mode"=>"process"),
    "vat_percentage"=>array("title"=>"USt-Satz","mode"=>"string","dbkey"=>"vat_percentage","data"=>"number"),
    "vat"=>array("title"=>"Steueranteil einzeln (CENT!)","mode"=>"process"),
    "vat_fmt"=>array("title"=>"Steueranteil einzeln","mode"=>"process"),
  );
  
  public static $link_elements=array(
  );
  public static $list_elements=array(
    "article_id",
    "min_quant",
    "price_fmt",
    "vat_percentage",
    "vat_fmt",
    "price_vat_fmt",
  );
  public static $detail_elements=array(
    "article_id",
    "min_quant",
    "vat_percentage",
    "price_fmt",
    "vat_fmt",
    "price_vat_fmt",
  );
  public static $edit_elements=array(
    "article_id",
    "min_quant",
    "price",
    "vat_percentage",
  );
  public static $links=array(
//    "User"=>array("title"=>"Mitglieder","table"=>"link_users_groups"),
  );
  public function processProperty($key) {
    $ret=NULL;
    switch($key) {
      //price: raw
      case "price_fmt": //formatted price
        $ret=sprintf("%.2f",($this->price)/100);
      break;
      case "price_vat": //raw price with VAT
        $ret=round(($this->price)*(1+($this->vat_percentage/100)));
      break;
      case "price_vat_fmt": //formatted price with VAT
        $ret=sprintf("%.2f",(($this->price)*(1+($this->vat_percentage/100)))/100);
      break;
      case "vat":
        $ret=round((($this->price)*(0+($this->vat_percentage/100))));
      break;
      case "vat_fmt":
        $ret=sprintf("%.2f",round((($this->price)*(0+($this->vat_percentage/100))))/100);
      break;

    }
    return $ret;
  }
}

plugins_register_backend_handler($plugin,"prices","list",array("Wawi_Price","listView"));
plugins_register_backend_handler($plugin,"prices","edit",array("Wawi_Price","editView"));
plugins_register_backend_handler($plugin,"prices","view",array("Wawi_Price","detailView"));
plugins_register_backend_handler($plugin,"prices","submit",array("Wawi_Price","processSubmit"));
plugins_register_backend_handler($plugin,"prices","delete",array("Wawi_Price","processDelete"));
