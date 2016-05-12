<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias = array();	
	$tdatacategorias[".truncateText"] = true;
	$tdatacategorias[".NumberOfChars"] = 80; 
	$tdatacategorias[".ShortName"] = "categorias";
	$tdatacategorias[".OwnerID"] = "";
	$tdatacategorias[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias["Portuguese(Brazil)"] = array();
	$pageTitlescategorias["Portuguese(Brazil)"] = array();
	$fieldLabelscategorias["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["imagens"] = "Imagem";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["imagens"] = "";
	if (count($fieldToolTipscategorias["Portuguese(Brazil)"]))
		$tdatacategorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias[""] = array();
	$fieldToolTipscategorias[""] = array();
	$pageTitlescategorias[""] = array();
	$fieldLabelscategorias[""]["id"] = "Id";
	$fieldToolTipscategorias[""]["id"] = "";
	$fieldLabelscategorias[""]["nome"] = "Nome";
	$fieldToolTipscategorias[""]["nome"] = "";
	$fieldLabelscategorias[""]["imagens"] = "Imagens";
	$fieldToolTipscategorias[""]["imagens"] = "";
	if (count($fieldToolTipscategorias[""]))
		$tdatacategorias[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;
$tdatacategorias[".recsPerRowList"] = 1;
$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".moveNext"] = 1;
$tdatacategorias[".nType"] = 0;

$tdatacategorias[".strOriginalTableName"] = "categorias";




$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias[".fieldsForRegister"] = array();

$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;


$tdatacategorias[".list"] = true;

$tdatacategorias[".inlineEdit"] = true;
$tdatacategorias[".inlineAdd"] = true;




$tdatacategorias[".delete"] = true;

$tdatacategorias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias[".searchSaving"] = false;
//

$tdatacategorias[".showSearchPanel"] = true;
		$tdatacategorias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;



$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;





$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".allSearchFields"][] = "imagens";
	$tdatacategorias[".allSearchFields"][] = "id";
	$tdatacategorias[".allSearchFields"][] = "nome";
	

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "id";
$tdatacategorias[".googleLikeFields"][] = "nome";
$tdatacategorias[".googleLikeFields"][] = "imagens";


$tdatacategorias[".advSearchFields"] = array();
$tdatacategorias[".advSearchFields"][] = "imagens";
$tdatacategorias[".advSearchFields"][] = "id";
$tdatacategorias[".advSearchFields"][] = "nome";

$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();

$tdatacategorias[".sqlHead"] = "SELECT id,  	nome,  	imagens";
$tdatacategorias[".sqlFrom"] = "FROM categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tableKeyscategorias[] = "id";
$tdatacategorias[".Keys"] = $tableKeyscategorias;

$tdatacategorias[".listFields"] = array();
$tdatacategorias[".listFields"][] = "id";
$tdatacategorias[".listFields"][] = "nome";
$tdatacategorias[".listFields"][] = "imagens";

$tdatacategorias[".hideMobileList"] = array();


$tdatacategorias[".viewFields"] = array();

$tdatacategorias[".addFields"] = array();

$tdatacategorias[".inlineAddFields"] = array();
$tdatacategorias[".inlineAddFields"][] = "nome";
$tdatacategorias[".inlineAddFields"][] = "imagens";

$tdatacategorias[".editFields"] = array();

$tdatacategorias[".inlineEditFields"] = array();
$tdatacategorias[".inlineEditFields"][] = "nome";
$tdatacategorias[".inlineEditFields"][] = "imagens";

$tdatacategorias[".exportFields"] = array();

$tdatacategorias[".importFields"] = array();

$tdatacategorias[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","id"); 
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

	

	
	$tdatacategorias["id"] = $fdata;
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","nome"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nome"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";
	
		
		
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

	

	
	$tdatacategorias["nome"] = $fdata;
//	imagens
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "imagens";
	$fdata["GoodName"] = "imagens";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","imagens"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "imagens"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagens";
	
		
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "../uploads/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
			
		
		
		
		
		
		
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	$fdata["Absolute"] = true;
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacategorias["imagens"] = $fdata;

	
$tables_data["categorias"]=&$tdatacategorias;
$field_labels["categorias"] = &$fieldLabelscategorias;
$fieldToolTips["categorias"] = &$fieldToolTipscategorias;
$page_titles["categorias"] = &$pageTitlescategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	imagens";
$proto0["m_strFrom"] = "FROM categorias";
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
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "categorias";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto7["m_sql"] = "nome";
$proto7["m_srcTableName"] = "categorias";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "imagens",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto9["m_sql"] = "imagens";
$proto9["m_srcTableName"] = "categorias";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "categorias";
$proto12["m_srcTableName"] = "categorias";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nome";
$proto12["m_columns"][] = "imagens";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "categorias";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "categorias";
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
$proto0["m_srcTableName"]="categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
			
	
$tdatacategorias[".sqlquery"] = $queryData_categorias;

include_once(getabspath("include/categorias_events.php"));
$tableEvents["categorias"] = new eventclass_categorias;
$tdatacategorias[".hasEvents"] = true;

?>