<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabanners = array();	
	$tdatabanners[".truncateText"] = true;
	$tdatabanners[".NumberOfChars"] = 80; 
	$tdatabanners[".ShortName"] = "banners";
	$tdatabanners[".OwnerID"] = "";
	$tdatabanners[".OriginalTable"] = "banners";

//	field labels
$fieldLabelsbanners = array();
$fieldToolTipsbanners = array();
$pageTitlesbanners = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbanners["Portuguese(Brazil)"] = array();
	$fieldToolTipsbanners["Portuguese(Brazil)"] = array();
	$pageTitlesbanners["Portuguese(Brazil)"] = array();
	$fieldLabelsbanners["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsbanners["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsbanners["Portuguese(Brazil)"]["titulo"] = "Titulo";
	$fieldToolTipsbanners["Portuguese(Brazil)"]["titulo"] = "";
	$fieldLabelsbanners["Portuguese(Brazil)"]["imagem"] = "Imagem";
	$fieldToolTipsbanners["Portuguese(Brazil)"]["imagem"] = "";
	if (count($fieldToolTipsbanners["Portuguese(Brazil)"]))
		$tdatabanners[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbanners[""] = array();
	$fieldToolTipsbanners[""] = array();
	$pageTitlesbanners[""] = array();
	$fieldLabelsbanners[""]["id"] = "Id";
	$fieldToolTipsbanners[""]["id"] = "";
	$fieldLabelsbanners[""]["titulo"] = "Titulo";
	$fieldToolTipsbanners[""]["titulo"] = "";
	$fieldLabelsbanners[""]["imagem"] = "Imagem";
	$fieldToolTipsbanners[""]["imagem"] = "";
	if (count($fieldToolTipsbanners[""]))
		$tdatabanners[".isUseToolTips"] = true;
}
	
	
	$tdatabanners[".NCSearch"] = true;



$tdatabanners[".shortTableName"] = "banners";
$tdatabanners[".nSecOptions"] = 0;
$tdatabanners[".recsPerRowList"] = 1;
$tdatabanners[".mainTableOwnerID"] = "";
$tdatabanners[".moveNext"] = 1;
$tdatabanners[".nType"] = 0;

$tdatabanners[".strOriginalTableName"] = "banners";




$tdatabanners[".showAddInPopup"] = false;

$tdatabanners[".showEditInPopup"] = false;

$tdatabanners[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabanners[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabanners[".fieldsForRegister"] = array();

$tdatabanners[".listAjax"] = false;

	$tdatabanners[".audit"] = false;

	$tdatabanners[".locking"] = false;


$tdatabanners[".list"] = true;

$tdatabanners[".inlineEdit"] = true;
$tdatabanners[".inlineAdd"] = true;




$tdatabanners[".delete"] = true;

$tdatabanners[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabanners[".searchSaving"] = false;
//

$tdatabanners[".showSearchPanel"] = true;
		$tdatabanners[".flexibleSearch"] = true;		

if (isMobile())
	$tdatabanners[".isUseAjaxSuggest"] = false;
else 
	$tdatabanners[".isUseAjaxSuggest"] = true;

$tdatabanners[".rowHighlite"] = true;



$tdatabanners[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabanners[".isUseTimeForSearch"] = false;





$tdatabanners[".allSearchFields"] = array();
$tdatabanners[".filterFields"] = array();
$tdatabanners[".requiredSearchFields"] = array();

$tdatabanners[".allSearchFields"][] = "id";
	$tdatabanners[".allSearchFields"][] = "titulo";
	$tdatabanners[".allSearchFields"][] = "imagem";
	

$tdatabanners[".googleLikeFields"] = array();
$tdatabanners[".googleLikeFields"][] = "id";
$tdatabanners[".googleLikeFields"][] = "titulo";
$tdatabanners[".googleLikeFields"][] = "imagem";


$tdatabanners[".advSearchFields"] = array();
$tdatabanners[".advSearchFields"][] = "id";
$tdatabanners[".advSearchFields"][] = "titulo";
$tdatabanners[".advSearchFields"][] = "imagem";

$tdatabanners[".tableType"] = "list";

$tdatabanners[".printerPageOrientation"] = 0;
$tdatabanners[".nPrinterPageScale"] = 100;

$tdatabanners[".nPrinterSplitRecords"] = 40;

$tdatabanners[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatabanners[".pageSize"] = 20;

$tdatabanners[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabanners[".strOrderBy"] = $tstrOrderBy;

$tdatabanners[".orderindexes"] = array();

$tdatabanners[".sqlHead"] = "SELECT id,  	titulo,  	imagem";
$tdatabanners[".sqlFrom"] = "FROM banners";
$tdatabanners[".sqlWhereExpr"] = "";
$tdatabanners[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabanners[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabanners[".arrGroupsPerPage"] = $arrGPP;

$tdatabanners[".highlightSearchResults"] = true;

$tableKeysbanners = array();
$tableKeysbanners[] = "id";
$tdatabanners[".Keys"] = $tableKeysbanners;

$tdatabanners[".listFields"] = array();
$tdatabanners[".listFields"][] = "id";
$tdatabanners[".listFields"][] = "titulo";
$tdatabanners[".listFields"][] = "imagem";

$tdatabanners[".hideMobileList"] = array();


$tdatabanners[".viewFields"] = array();

$tdatabanners[".addFields"] = array();

$tdatabanners[".inlineAddFields"] = array();
$tdatabanners[".inlineAddFields"][] = "titulo";
$tdatabanners[".inlineAddFields"][] = "imagem";

$tdatabanners[".editFields"] = array();

$tdatabanners[".inlineEditFields"] = array();
$tdatabanners[".inlineEditFields"][] = "titulo";
$tdatabanners[".inlineEditFields"][] = "imagem";

$tdatabanners[".exportFields"] = array();

$tdatabanners[".importFields"] = array();

$tdatabanners[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "banners";
	$fdata["Label"] = GetFieldLabel("banners","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatabanners["id"] = $fdata;
//	titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "titulo";
	$fdata["GoodName"] = "titulo";
	$fdata["ownerTable"] = "banners";
	$fdata["Label"] = GetFieldLabel("banners","titulo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "titulo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabanners["titulo"] = $fdata;
//	imagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "imagem";
	$fdata["GoodName"] = "imagem";
	$fdata["ownerTable"] = "banners";
	$fdata["Label"] = GetFieldLabel("banners","imagem"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "imagem"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagem";
	
		
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../banners/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatabanners["imagem"] = $fdata;

	
$tables_data["banners"]=&$tdatabanners;
$field_labels["banners"] = &$fieldLabelsbanners;
$fieldToolTips["banners"] = &$fieldToolTipsbanners;
$page_titles["banners"] = &$pageTitlesbanners;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["banners"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["banners"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_banners()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	titulo,  	imagem";
$proto0["m_strFrom"] = "FROM banners";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "banners",
	"m_srcTableName" => "banners"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "banners";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "titulo",
	"m_strTable" => "banners",
	"m_srcTableName" => "banners"
));

$proto7["m_sql"] = "titulo";
$proto7["m_srcTableName"] = "banners";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "imagem",
	"m_strTable" => "banners",
	"m_srcTableName" => "banners"
));

$proto9["m_sql"] = "imagem";
$proto9["m_srcTableName"] = "banners";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "banners";
$proto12["m_srcTableName"] = "banners";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "titulo";
$proto12["m_columns"][] = "imagem";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "banners";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "banners";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="banners";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_banners = createSqlQuery_banners();


	
			
	
$tdatabanners[".sqlquery"] = $queryData_banners;

include_once(getabspath("include/banners_events.php"));
$tableEvents["banners"] = new eventclass_banners;
$tdatabanners[".hasEvents"] = true;

?>