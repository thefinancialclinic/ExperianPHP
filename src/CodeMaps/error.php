<?php
/**
 *	Based on CIS Technical Documents File: Appendix 03-21-2016.pdf
 *	Section: A. Error Messages and Codes
 *	Page No: 11
 */
$experionErrors=[
	"000"=>"NORMAL, NO ACTION REQUIRED",
	"001"=>"*** SYSTEM TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT ***",
	"002"=>"INVALID LENGTH INQUIRY, EXCEEDS MAXIMUM LENGTH",
	"003"=>"ENTER CHARACTER NOT IN CORRECT POSITION",
	"004"=>"FORMAT ERROR; RETYPE INQUIRY (OP/R/T)",
	"005"=>"M- KEYWORD ERROR",
	"010"=>"CONSUMER IS A MINOR",
	"013"=>"FORMAT ERROR; RETYPE INQUIRY (KW)",
	"014"=>"T- TYPE/TERMS/AMOUNT FIELD FORMAT ERROR",
	"015"=>"AMT- AMOUNT FIELD FORMAT ERROR",
	"016"=>"KEYING ERROR DETECTED IN EPIN- KEYWORD",
	"018"=>"INFORMATION FROM THE INQUIRY WAS REPORTED AS FRAUD BY THE CONSUMER",
	"019"=>"EMPLOYMENT FIELD FORMAT ERROR",
	"031"=>"INVALID SUBSCRIBER NUMBER",
	"032"=>"BULLSEYE X- KEYWORD ACCOUNT NUMBER ERROR",
	"034"=>"INVALID USE OF *B* KEYWORD",
	"035"=>"INVALID DATA IN *B* KEYWORD FIELD",
	"037"=>"INVALID YOB",
	"040"=>"INVALID USE OF *C* KEYWORD",
	"041"=>"INVALID DATA IN *C* KEYWORD FIELD",
	"043"=>"INVALID USE OF QUEST TYPE CODE",
	"045"=>"INVALID SURNAME",
	"047"=>"CURRENT HOUSE NUMBER ERROR",
	"049"=>"CURRENT ZIP CODE ERROR",
	"051"=>"CBR MEMBERS MAY NOT ACCESS THROUGH EXPERIAN",
	"053"=>"INVALID SOCIAL SECURITY NUMBER",
	"054"=>"PREVIOUS HOUSE NUMBER ERROR",
	"055"=>"INVALID PREVIOUS STREET ADDRESS FIELD",
	"056"=>"PREVIOUS ZIP CODE ERROR",
	"058"=>"I/O ERROR - PLEASE RESUBMIT",
	"061"=>"INVALID GENERATION CODE- (Obsolete)",
	"066"=>"LOGONLY PROCESSED (Used by Secondary Use inquiry to indicate that the inqui",
	"was"=>"processed successfully. This will change on 11/6/09. See bulletin Vol. 4, 2009))",
	"067"=>"SUBSCRIBER NOT ALLOWED TO INQUIRE",
	"073"=>"ZIP CODE REQUIRED",
	"074"=>"INVALID SECURITY PASSWORD",
	"076"=>"INQUIRY NOT ALLOWED",
	"080"=>"INVALID INQUIRY TYPE",
	"088"=>"ONLY ONE SCORE DISTRIBUTION KEYWORD ALLOWED",
	"089"=>"SCORE DISTRUIBTION MODEL NOT AVAILABLE",
	"090"=>"SCORE DISTRIBUTION PRODUCTION CODE NOT AVAILABLE",
	"092"=>"STATE LEGISLATION REQUIRES MATCH ON MORE IDENTIFICATION INFORMATION",
	"096"=>"VERSION # FIELD FORMAT ERROR",
	"098"=>"INVALID USE OF *D* KEYWORD",
	"099"=>"FORMAT ERROR IN *H* KEYWORD FIELD",
	"106"=>"Invalid Surname- Precise ID Only",
	"110"=>"Z- KEYWORD FORMAT ERROR",
	"112"=>"R- KEYWORD FORMAT ERROR",
	"114"=>"X, F, OR G KEYWORD FORMAT ERROR",
	"115"=>"X, F, G, OR K- KEYWORD ONE PER INQUIRY",
	"117"=>"X- OR F- KEYWORD NOT NUMERIC",
	"130"=>"SPOUSE EMPLOYMENT FORMAT ERROR",
	"133"=>"SP- KEYWORD ERROR",
	"139"=>"INVALID SPOUSE SOCIAL SECURITY NUMBER",
	"145"=>"K- KEYWORD FORMAT ERROR",
	"153"=>"TYPE 51 IS NOT ALLOWED WITH T- KEYWORD",
	"155"=>"FORMAT ERROR IN *O* KEYWORD FIELD",
	"160"=>"INVALID VERSION REQUESTED",
	"163"=>"INVALID L- KEYWORD, PLEASE RESUBMIT",
	"170"=>"INVALID USE OF 9- KEYWORD",
	"173"=>"INVALID INQUIRY TYPE FOR REPORT CODE",
	"175"=>"INVALID DATA FOR RM- KEYWORD",
	"189"=>"TRADE INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"190"=>"SOFTWARE VALIDATION NEEDED. CALL 800-854-7201",
	"192"=>"M- KEYWORD MUST HAVE AN ADDRESS WITH ZIP",
	"200"=>"BINGO - YOUR INPUT IS CORRECT (response for ‘ZZ’ training inquiry accepted)",
	"210"=>"ERROR OCCURRED ACCESSING SUBSCRIBER DATA",
	"211"=>"SUBSCRIBER DATA NOT FOUND",
	"212"=>"SUBSCRIBERS CUSTOM FORMAT DATA NOT FOUND",
	"213"=>"ACCESS DENIED - VERMONT CONSUMER",
	"215"=>"AP/RETAIL SEARCH DID NOT COMPLETE IN ALLOWED TIME",
	"216"=>"FULL ADDRESS REQUIRED TO REQUEST AP/RETAIL",
	"217"=>"VALID CHKPT- KEYWORD REQUIRED TO REQUEST AP/RETAIL REPORT",
	"222"=>"YOUR SUBS ACCESS NO. IS INACTIVE. \ PLEASE CALL YOUR EXPERIAN REP FOR REACTIVATION",
	"223"=>"CONSUMER TOO YOUNG FOR PRESCREENS",
	"250"=>"ROUTING ERROR: RR-APS EXPECTED BUT NOT PRESENT",
	"251"=>"CIT- KEYWORD FORMAT ERROR",
	"252"=>"APS- KEYWORD FORMAT ERROR",
	"253"=>"DUPLICATE KEYWORD FOR APS, REQUEST NOT ALLOWED",
	"254"=>"REQUESTED VERSION NUMBER NOT SUPPORTED FOR ONE OR MORE REQUESTED PRODUCTS",
	"255"=>"CIT- KEYWORD MUST CONTAIN X",
	"257"=>"ONE OR MORE REPORT REQUESTS DID NOT COMPLETE IN ALLOWED TIME",
	"258"=>"ONE OR MORE REQUESTED REPORTS UNAVAILABLE AT THIS TIME – PLEASE RESUBMIT LATER",
	"259"=>"COMPONENT OF CHECKPOINT SYSTEM TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"260"=>"ATB Processing Error",
	"261"=>"Strategy Manager Processing Error",
	"301"=>"CONSUMER CREDIT REPORT REQUIRED WITH NFD REPORT",
	"302"=>"NFD- KEYWORD MISSING OR MULTIPLES FOUND",
	"304"=>"*** NFD TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT ***",
	"305"=>"NFD MEMBER NUMBER MISSING OR INVALID",
	"306"=>"NFD CREDIT APPLICATION TYPE MISSING OR INVALID",
	"307"=>"NFD ACTION CODE MISSING OR INVALID",
	"308"=>"CONSUMER NAME FIELD MISSING OR INVALID",
	"309"=>"CONSUMER SOCIAL SECURITY NUMBER MISSING OR INVALID",
	"310"=>"APPLICANT ADDRESS FIELD MISSING OR INVALID",
	"311"=>"SPOUSE NAME FIELD MISSING OR INVALID",
	"312"=>"SPOUSE SOCIAL SECURITY NUMBER MISSING OR INVALID",
	"313"=>"NFD DOES NOT PROCESS INQUIRIES WITH A COLORADO ZIP CODE",
	"314"=>"TYPE CODE MISSING OR INVALID",
	"318"=>"PERMISSIBLE PURPOSE REQUIRED FOR NATIONAL FRAUD DATABASE",
	"319"=>"SSF INQUIRY NOT SUPPORTED",
	"320"=>"NOT ALLOWED TO RECEIVE EXPERIAN DETECT PRODUCT",
	"321"=>"BLOCKED CONSUMER, EXPERIAN DETECT PROCESS NOT DENIED",
	"322"=>"SUBSCRIBER NOT SETUP ON EXPERIAN DETECT DATABASE, PLEASE CONTACT EXPERIAN",
	"323"=>"NOT ALL DATA AVAILABLE FOR EXPERIAN DETECT EVALUATION",
	"324"=>"EXPERIAN DETECT TEMPORARILY UNAVAILABLE",
	"325"=>"NOT ALLOWED TO USE DTONLY OPTION",
	"326"=>"SECOND LINE OF ADDRESS EXCEEDS 48 CHARACTERS MAX SIZE. PLEASE CORRECT AND RESUBMIT",
	"330"=>"RETRO- DATE INVALID",
	"331"=>"MEMBER NUMBER NOT ASSOCIATED WITH SUBSCRIBER NUMBER",
	"332"=>"MEMBER NOT ALLOWED ADMIN ACCESS",
	"333"=>"RETRO- KEYWORD AND ADMIN ACCESS PARAMETER CANNOT BE COMBINED",
	"334"=>"DATE RANGE NOT ALLOWED WITH RETRO- KEYWORD",
	"335"=>"(Reserved for ICPs 18334 and 18497 4/28/05)",
	"336"=>"(Reserved for ICPs 18334 and 18497 4/28/05)",
	"340"=>"RETRIEVED PINS EXCEED MAXIMUM ALLOCATED SPACE",
	"350"=>"NOT ALLOWED TO RECEIVE PRECISE ID PRODUCT",
	"351"=>"PID- KEYWORD MISSING OR FORMAT ERROR",
	"352"=>"PRECISE ID SYSTEM TEMPORARILY UNAVAILABLE",
	"353"=>"ICSCN- KEYWORD FORMAT ERROR",
	"354"=>"ICSCS- KEYWORD FORMAT ERROR",
	"355"=>"NOT AUTHORIZED FOR GLB",
	"356"=>"NOT AUTHORIZED FOR FCRA",
	"357"=>"NOT AUTHORIZED FOR NFD ONLY",
	"358"=>"FRAUD SHIELD UNAVAILABLE",
	"359"=>"INVALID SSN FOR THIS PRECISE ID INQUIRY TYPE",
	"360"=>"NOT AUTHORIZED FOR FCRA PRECISE ID WITH CREDIT REPORT",
	"361"=>"INVALID SSN FORMAT",
	"362"=>"CREDIT REPORTING TEMPORARILY UNAVAILABLE",
	"378"=>"EXPANDED INQUIRY FORMAT REQUIRED",
	"382"=>"AREA NOT AVAILABLE TO THIS SUBSCRIBER",
	"384"=>"INVALID SUBCODE FOR REPORT TYPE 6",
	"388"=>"INVALID PREAMBLE FOR THIS SUBCODE",
	"390"=>"INVALID T- KEYWORD",
	"402"=>"*** FULL CURRENT ADDRESS REQUIRED TO ACCESS CONSUMERS FILE ***",
	"403"=>"SS# REQUIRED TO ACCESS CONSUMERS FILE",
	"404"=>"GENERATION CODE REQUIRED TO ACCESS CONSUMERS FILE",
	"405"=>"YEAR OF BIRTH REQUIRED TO ACCESS CONSUMERS FILE",
	"406"=>"MIDDLE NAME REQUIRED TO ACCESS CONSUMERS FILE",
	"407"=>"UNABLE TO STANDARDIZE CURRENT ADDRESS",
	"408"=>"ADDRESS FIELD INVALID",
	"500"=>"CONSUMER NAME INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"501"=>"CONSUMER COMMENTS INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"502"=>"CONSUMER ADDRESS INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"503"=>"PUBLIC RECORD INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"504"=>"INQUIRY HISTORY INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"505"=>"SERVICE INQUIRY HISTORY INFORMATION TEMPORARILY UNAVAILABLE. PLEASE RESUBMIT",
	"600"=>"BA- OR CA- KEYWORD NOT PRESENT",
	"602"=>"THIRD PA- KEYWORD DETECTED",
	"616"=>"INVALID LAST/FIRST/MIDDLE NAME",
	"621"=>"INVALID SPOUSE NAME",
	"627"=>"INVALID STREET ADDRESS FIELD",
	"630"=>"CITY/STATE REQUIRED ON INQUIRY",
	"631"=>"PRIMARY NAME LINE EXCEEDS MAX SIZE",
	"632"=>"SPOUSE NAME: LENGTH INVALID",
	"633"=>"CURR/BILLING ADDRESS LINE EXCEEDS MAX SIZE",
	"634"=>"PREV/SERVICE ADDRESS LINE EXCEEDS MAX SIZE",
	"638"=>"** LOGIC ERROR - PLEASE CALL EXPERIAN 800-854-7201",
	"639"=>"INQUIRY TYPE INVALID FOR THIS SUBCODE",
	"643"=>"U- KEYWORD FORMAT ERROR",
	"645"=>"U: DATA NOT ALLOWED WITH THIS INQUIRY",
	"651"=>"NEED S/W NETWORK VALIDATION 800-854-7201",
	"652"=>"NEED S/W WINDOWS VALIDATION 800-854-7201",
	"653"=>"*** END-USER IDENTIFICATION REQUIRED ***",
	"654"=>"(HOLD FOR CUSTOM SOLUTIONS RD RESERVED) 660 REQUIRED KEYWORD MISSING",
	"661"=>"INVALID KEYWORD FOR INQUIRY TYPE",
	"672"=>"INVALID VENDOR ID; PLEASE CALL 800-854-7201",
	"675"=>"INVALID JOB1- KEYWORD",
	"676"=>"INVALID RES1- KEYWORD",
	"677"=>"INVALID INC1- KEYWORD",
	"678"=>"INVALID EXP1- KEYWORD",
	"679"=>"INVALID BRE1- KEYWORD",
	"680"=>"INVALID DEP1- KEYWORD",
	"681"=>"INVALID INFO- KEYWORD",
	"682"=>"INVALID OVER- KEYWORD",
	"683"=>"COMMUNICATION ERROR",
	"684"=>"INVALID JOB2- KEYWORD",
	"685"=>"INVALID RES- KEYWORD",
	"686"=>"INVALID RES2- KEYWORD",
	"687"=>"INVALID INC- KEYWORD",
	"688"=>"INVALID INC2- KEYWORD",
	"689"=>"INVALID EXP- KEYWORD",
	"690"=>"INVALID EXP2- KEYWORD",
	"691"=>"INVALID BRE- KEYWORD",
	"692"=>"INVALID BRE2- KEYWORD",
	"693"=>"INVALID DEP- KEYWORD",
	"694"=>"INVALID DEP2- KEYWORD",
	"695"=>"INVALID VERIFY- KEYWORD",
	"696"=>"INVALID SCA- KEYWORD",
	"697"=>"INVALID AUTO- KEYWORD",
	"698"=>"INVALID REF- KEYWORD",
	"699"=>"INVALID PRD- KEYWORD",
	"701"=>"FORMATTING ERROR",
	"702"=>"INVALID DEMOGRAPHIC DATA",
	"703"=>"CUSTOMER NOT SET UP ON OPTIONS TABLE",
	"704"=>"CS SYSTEM FAILURE",
	"705"=>"ARF VERSION NUMBER MISSING",
	"706"=>"ARF SYSTEM FAILURE",
	"707"=>"DECISION CANNOT BE GENERATED DUE TO FACS+ UNAVAILABLE",
	"708"=>"SUBCODE NOT FOUND ON SETUP TABLE (APS/DaaS inquiries)",
	"708"=>"INPUT VALIDATION ERROR (Precise ID)",
	"709"=>"INVALID USER ID/PASSWORD (Precise ID)",
	"710"=>"SESSION TIMEOUT (Precise ID)",
	"711"=>"END USER REQUIRED (Precise ID)",
	"715"=>"KIQ SESSION EXCEEDED TIMEOUT LIMIT (Precise ID)",
	"720"=>"OTHER PRECISE ID SYSTEM ERROR (Precise ID)",
	"730"=>"INPUT VALIDATION ERROR (Fraud AVS)",
	"731"=>"SSO AUTHENTICATION ERROR (Fraud AVS)",
	"732"=>"CUSTOMER MASTER ERROR (Fraud AVS)",
	"733"=>"CLIENT CONFIGURATION ERROR (Fraud AVS)",
	"734"=>"SYSTEM PROCESSING ERROR (Fraud AVS)",
	"735"=>"TRANSACTION NOT FOUND- ( Fraud AVS )",
	"799"=>"INSTANT PRESCREEN NON-RESPONSE. No TTY text.",
	"806"=>"ERROR ATTEMPTING TO CONNECT TO CREDIT BUREAU GATEWAY",
	"807"=>"ERROR TRANSMITTING INQUIRY TO CREDIT BUREAU GATEWAY",
	"808"=>"ERROR RECEIVING FROM CREDIT BUREAU GATEWAY",
	"809"=>"ERROR DE-BLOCKING BUREAU RESPONSE SEGMENTS",
	"810"=>"INTERNAL RESPONSE EVALUATION CONTROL TABLE ERROR",
	"811"=>"JOINT INQUIRY NOT ALLOWED",
	"812"=>"SYSTEM STORAGE SPACE EXCEEDED",
	"813"=>"INVALID DLX2 KEYWORD",
	"814"=>"INVALID BRU KEYWORD",
	"815"=>"PRODUCT IDENTIFICATION IN PRD- KEYWORD DOES NOT MATCH AUTHORIZED PRODUCTS",
	"816"=>"ALL REQUESTED BUREAUS RETURNED A NO RECORD FOUND",
	"817"=>"INVALID OVRD- KEYWORD",
	"818"=>"EQUIFAX RETURNED AN ERROR MESSAGE",
	"819"=>"TRANS UNION RETURNED AN ERROR MESSAGE",
	"820"=>"SYSTEM UNAVAILABLE – PLEASE TRY LATER",
	"821"=>"INQUIRY FORMAT ERROR",
	"822"=>"INVALID SECURITY PASSWORD",
	"823"=>"INVALID OPTIN1- KEYWORD",
	"824"=>"INVALID OPTIN2- KEYWORD",
	"825"=>"CUSTOM STRATEGIST CONFLICT FOR KEYWORD SSI-, RM-, M-",
	"827"=>"MODEL REQUIRES VERIFY-RM KEYWORD",
	"828"=>"A CREDIT DECISION CANNOT BE MADE BECAUSE THE PRIMARY BORROWER HAS BLOCKED ACCESS TO THE CREDIT PROFILE INFORMATION PURSUANT TO CA SB168",
	"829"=>"A CREDIT DECISION CANNOT BE MADE BECAUSE THE SECONDARY BORROWER HAS BLOCKED ACCESS TO THE CREDIT PROFILE INFORMATION PURSUANT TO CA SB168",
	"851"=>"PINID- KEYWORD ERROR",
	"856"=>"INVALID LENGTH FOR CONSUMER SERVICES – INQUIRY HAS AN INCORRECT LENGTH",
	"860"=>"RESOURCE NOT AVAILABLE, PLEASE RE-ENTER INQUIRY",
	"901"=>"INSUFFICIENT DATA SUPPLIED",
	"902"=>"DUPLICATE KEYWORDS ENTERED",
	"903"=>"INVALID DATA FOR K- KEYWORD",
	"904"=>"INVALID DATA FOR R- KEYWORD",
	"905"=>"INVALID DATA FOR O- KEYWORD",
	"925"=>"MSG- MAXIMUM LENGTH IS 68 CHARACTERS",
	"926"=>"MSG- MINIMUM LENGTH IS 7 CHARACTERS",
	"928"=>"MSG- MAXIMUM 20 CHARS IF NO NAME",
	"929"=>"MSG- REQUIRES SSN TO BE ENTERED",
	"930"=>"MSG- TELEPHONE NUMBER LENGTH INCORRECT",
	"931"=>"MSG- ONLY NAME MAY FOLLOW TELEPHONE NUM",
	"935"=>"MSG- TELEPHONE NUMBER INVALID",
	"936"=>"INQUIRY TYPE / SUBCODE CONFLICT",
	"944"=>"MORE THAN 20 SOCIALS DETECTED",
	"945"=>"ORIGINAL CREDITOR EXCEEDS 30 CHARACTERS",
	"946"=>"ORIGINAL CREDITOR REQUIRED FOR COLLECTION AGENCIES",
	"947"=>"MULTIPLE PINS MATCH NUMERIC INQUIRY CRITERIA OR DRIVERS LICENSE INQUIRY CRITERIA",
	"948"=>"PINS ASSOCIATED WITH ADDRESS EXCEED MAXIMUM LIMIT",
	"999"=>"UNKNOWN ERROR"
];