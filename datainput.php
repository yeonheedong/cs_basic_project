<?php
    $con=mysqli_connect("localhost","root","","77date")
	or die("접속 실패");
	$sql="
	    INSERT INTO project VALUES
('임나영',      SHA2('7105052589898', 512),      'skdud',      SHA2('skdud',512),      'O',   HEX(AES_ENCRYPT('변호사', 'PN')), ' ' ,    '김앤장',         HEX(AES_ENCRYPT('대전', 'PN')),   170,   '기독교',      'X',   '여자',4   ),
('황민현',      SHA2('7109121458523', 512),      'alsgus99',   SHA2('alsgus99',512),   'A',   HEX(AES_ENCRYPT('청소부', 'PN')),' ' ,     '서울대학교',      HEX(AES_ENCRYPT('제주', 'PN')),   180,   '불교',      'O',   '남자',4   ),
('김도연',      SHA2('7209092489674', 512),      'ehdus87',   SHA2('ehdus87',512),   'B',   HEX(AES_ENCRYPT('가수', 'PN')),   ' ' ,  '플레디스엔터테인먼트',   HEX(AES_ENCRYPT('서울', 'PN')),   168,   '무교',      'X',   '여자',4   ),
('정채연',      SHA2('7303032456484', 512),      'codus123',   SHA2('codus123',512),   'B',   HEX(AES_ENCRYPT('배우', 'PN')), ' '  ,   'jyp엔터테인먼트',      HEX(AES_ENCRYPT('부산', 'PN')),   164,   '기독교',      'X',   '여자',4   ),
('배진영',      SHA2('7303091525632', 512),      'wlsdud12',   SHA2('wlsdud12',512),   'AB',   HEX(AES_ENCRYPT('택배배달원', 'PN')),' ',      '대한통운',      HEX(AES_ENCRYPT('인천',  'PN')),  170,   '불교',      'X',   '남자',4   ),
('박우진',      SHA2('7405011231223', 512),      'dnwls1',      SHA2('dnwls1',512),   'AB',   HEX(AES_ENCRYPT('요리사', 'PN')),   ' ' ,  '엘수에뇨이대점',     HEX(AES_ENCRYPT( '포항', 'PN')),   174,   '기독교',      'X',   '남자',4   ),
('주결경',      SHA2('7408052556554', 512),      'rufrud',      SHA2('rufrud',512),      'A',   HEX(AES_ENCRYPT('사업가', 'PN')),  ' ' ,   '서울대학교',      HEX(AES_ENCRYPT('서울',  'PN')),  175,   '무교',      'X',   '여자',4   ),
('옹성우',      SHA2('7503301452525', 512),      'tjddn55',      SHA2('tjddn55',512),   'A',   HEX(AES_ENCRYPT('강사', 'PN')),   ' '  , '메가스터디',      HEX(AES_ENCRYPT('울산',  'PN')),  169,   '무교',      'X',   '남자',4   ),
('김소혜',      SHA2('7504052786544', 512),      'sooo12',      SHA2('sooo12',512),   'A',   HEX(AES_ENCRYPT('약사', 'PN')),      ' ','동아제약',      HEX(AES_ENCRYPT('제주',  'PN')),  168,   '무교',      'O',   '여자',4   ),
('윤지성',      SHA2('7602211121245', 512),      'wltjd88',      SHA2('wltjd88',512),   'B',   HEX(AES_ENCRYPT('바리스타', 'PN')), ' '  ,   '펄스커피',      HEX(AES_ENCRYPT('서울', 'PN')),   185,   '무교',      'O',   '남자',4   ),
('김재환',      SHA2('7611111456532', 512),      'woghks12',   SHA2('woghks12',512),   'O',   HEX(AES_ENCRYPT('배우지망생', 'PN')),  ' '  ,  '한양대학교',      HEX(AES_ENCRYPT('대전', 'PN')),   190,   '힌두교',      'X',   '남자',4   ),
('김청하',      SHA2('7612122587782', 512),      'rollcccc',      SHA2('rollcccc',512),   'B',   HEX(AES_ENCRYPT('연구원', 'PN')),  ' '  ,  '삼성',         HEX(AES_ENCRYPT('거제',  'PN')),  159,   '기독교',      'X',   '여자',4   ),
('최유정',      SHA2('7701012454574', 512),      'choi',      SHA2('choi',512),      'A',   HEX(AES_ENCRYPT('공무원' ,'PN')), ' ' ,    '구청',         HEX(AES_ENCRYPT('포항', 'PN')),   165,   '힌두교',      'X',   '여자',4   ),
('강미나',      SHA2('7706022456745', 512),      'alsk2131',   SHA2('alsk2131',512),   'B',   HEX(AES_ENCRYPT('판사', 'PN')), ' ' ,    '법원',         HEX(AES_ENCRYPT('대구',  'PN')),  158,   '무교',      'X',   '여자',4   ),
('이대휘',      SHA2('7709061898989', 512),      'eognl',      SHA2('eognl',512),      'A',   HEX(AES_ENCRYPT('교수', 'PN')),   ' ',   '이화여자대학교',      HEX(AES_ENCRYPT('부산', 'PN')),   175,   '무교',      'O',   '남자',4   ),
('박지훈',      SHA2('7805061784578', 512),      'wlgns33',   SHA2('wlgns33',512),   'O',   HEX(AES_ENCRYPT('선생님', 'PN')), ' '    , '한림예술고등학교',      HEX(AES_ENCRYPT('서울', 'PN')),   181,   '기독교',      'O',   '남자',4),
('김세정',      SHA2('7806302455784', 512),      'ksj',      SHA2('ksj',512),      'AB',   HEX(AES_ENCRYPT('선생님', 'PN')),    ' ' , '청담고등학교',      HEX(AES_ENCRYPT('서울', 'PN')),   175,   '무교',      'O',   '여자',4   ),
('전소미',      SHA2('7902142547475', 512),      'soooom',   SHA2('soooom',512),   'A',   HEX(AES_ENCRYPT('의사', 'PN')),    ' ' , '연세세브란스',      HEX(AES_ENCRYPT('대구',  'PN')),  155,   '기독교',      'O',   '여자',4   ),
('강다니엘',   SHA2('7904241458754', 512),   'eksldpf53',   SHA2('eksldpf53',512),   'A',   HEX(AES_ENCRYPT('회사원' ,'PN')),  ' ' ,   '삼성',         HEX(AES_ENCRYPT('서울',  'PN')),  176,   '무교',      'O',   '남자',4   ),
('하성운',      SHA2('7908121959874', 512),   'tjddns7',      SHA2('tjddns7',512),   'A',   HEX(AES_ENCRYPT('수의사', 'PN')),  ' ' ,   '미미동물병원',      HEX(AES_ENCRYPT('전주', 'PN')),   190,   '무교',      'X',   '남자',4   ),
('박나래',      SHA2('8103042501310', 512),   'parknr53',   SHA2('parknr53',512),   'A',   HEX(AES_ENCRYPT('개그우먼', 'PN')),   ' ' ,  'sm엔터테인먼트',      HEX(AES_ENCRYPT('서울', 'PN')),   150,   '기독교',      'O',   '여자',9   ),
('오영주',      SHA2('8105132464947', 512),   'qwer1234',   SHA2('qwer1234',512),   'A',   HEX(AES_ENCRYPT('마케터' ,'PN')),   ' ' ,  '마이크로소프트',      HEX(AES_ENCRYPT('서울', 'PN')),   168,   '무교',      'X',   '여자',9   ),
('배윤경',      SHA2('8107132401316', 512),   'ming132',   SHA2('ming132',512),   'AB',   HEX(AES_ENCRYPT('배우', 'PN')),   ' '  , 'yg엔터테인먼트',      HEX(AES_ENCRYPT('서울', 'PN')),  163,   '무교',      'X',   '여자',9   ),
('장도연',      SHA2('8111142407971', 512),   'dodo111',   SHA2('dodo111',512),   'A',   HEX(AES_ENCRYPT('개그우먼', 'PN')),   ' ' ,  '저스트뮤직',      HEX(AES_ENCRYPT('서울', 'PN')),   173,   '무교',      'O',   '여자',9   ),
('서지혜',      SHA2('8112172014795', 512),   'ewha111',   SHA2('ewha111',512),   'B',   HEX(AES_ENCRYPT('개발자', 'PN')),    ' ' , '구글코리아',      HEX(AES_ENCRYPT('대전', 'PN')),   163,   '불교',      'X',   '여자',9   ),
('김도균',      SHA2('8206231324103', 512),   'korean133',   SHA2('korean133',512),   'A',   HEX(AES_ENCRYPT('의사', 'PN')),  ' ' ,   '존스킨한의원',      HEX(AES_ENCRYPT('포항', 'PN')),   183,   '무교',      'X',   '남자',9   ),
('한혜진',      SHA2('8306052613075', 512),   'hhj0314',      SHA2('hhj0314',512),   'B',   HEX(AES_ENCRYPT('모델', 'PN')),    ' ' , '에스팀',         HEX(AES_ENCRYPT('전주', 'PN')),   176,   '무교',      'O',   '여자',9   ),
('이상민',      SHA2('8401231304561', 512),   'lulla1',      SHA2('lulla1',512),      'B',   HEX(AES_ENCRYPT('음악프로듀서', 'PN')),' ',   'AOMG',         HEX(AES_ENCRYPT('대구', 'PN')),   182,   '기독교',      'X',   '남자',9   ),
('이규빈',      SHA2('8403121315147', 512),   'seoul00',      SHA2('seoul00',512),   'AB',   HEX(AES_ENCRYPT('공무원', 'PN')),     ' ', '국세청',         HEX(AES_ENCRYPT('청주', 'PN')),   181,   '천주교',      'O',   '남자',9   ),
('김장미',      SHA2('8504072604315', 512),   'rose33',      SHA2('rose33',512),      'O',   HEX(AES_ENCRYPT('패션디자이너', 'PN')),' ' ,  'ROSE',         HEX(AES_ENCRYPT('미국', 'PN')),   165,   '천주교',      'O',   '여자',9   ),
('김현우',      SHA2('8610121423461', 512),   'chef333',      SHA2('chef333',512),   'AB',   HEX(AES_ENCRYPT('요리사', 'PN')),     ' ' ,'메시야',         HEX(AES_ENCRYPT('울산', 'PN')),  180,   '이슬람교',   'X',   '남자',9   ),
('강성욱',      SHA2('8612121616304', 512),   'actor111',   SHA2('actor111',512),   'O',   HEX(AES_ENCRYPT('뮤지컬배우', 'PN')),    ' '  ,'연희단',         HEX(AES_ENCRYPT('서울', 'PN')),   176,   '불교',      'X',   '남자',9   ),
('정재호',      SHA2('8619181301441', 512),   'hihihi1',      SHA2('hihihi1',512),      'B',   HEX(AES_ENCRYPT('사업가', 'PN')),  ' '  ,  '스마트월렛',      HEX(AES_ENCRYPT('중국', 'PN')),   178,   '무교',      'X',   '남자',9   ),
('장천',      SHA2('8706051502132', 512),   'lawyer1',      SHA2('lawyer1',512),   'B',   HEX(AES_ENCRYPT('변호사', 'PN')),  ' '   , '김앤장',         HEX(AES_ENCRYPT('서울', 'PN')),   176,   '기독교',      'O',   '남자',9   ),
('임현주',      SHA2('8805062024647', 512),   'limhj11',      SHA2('limhj11',512),   'O',   HEX(AES_ENCRYPT('쇼핑몰모델', 'PN')),' ' ,     '데일리먼데이',      HEX(AES_ENCRYPT('부산', 'PN')),   168,   '불교',      'X',   '여자',9),
('조정린',      SHA2('8805092601347', 512),   'jojojo11',      SHA2('jojojo11',512),   'O',   HEX(AES_ENCRYPT('기자', 'PN')),  ' '  ,  'KBS',         HEX(AES_ENCRYPT('광주', 'PN')),   153,   '불교',      'O',   '여자',9   ),
('장첸',      SHA2('8807011324513', 512),   'knife4444',   SHA2('knife4444',512),   'O',   HEX(AES_ENCRYPT('사업가', 'PN')),   ' '  , '심부름센터',      HEX(AES_ENCRYPT('대전', 'PN')),   182,   '불교',      'O',   '남자',9),
('김이나',      SHA2('8903102103130', 512),   'mimi9278',   SHA2('mimi9278',512),   'AB',   HEX(AES_ENCRYPT('작사가', 'PN')), ' '    , '프리랜서',      HEX(AES_ENCRYPT('인천',  'PN')),  164,   '기독교',      'O',   '여자',9   ),
('윤종신',      SHA2('8904121024657', 512),   'jotni1324',   SHA2('jotni1324',512),   'A',   HEX(AES_ENCRYPT('가수', 'PN')), ' '    , '미스틱89',      HEX(AES_ENCRYPT('부산',  'PN')),  181,   '무교',      'O',   '남자',9   ),
('서주원',      SHA2('8906041346794', 512),   'ilovecar13',   SHA2('ilovecar13',512),   'B',   HEX(AES_ENCRYPT('카레이서', 'PN')), ' ' ,    '인디고 레이싱',      HEX(AES_ENCRYPT('미국', 'PN')),   165,   '천주교',      'O',   '남자',9   ),
('천창민',      SHA2('9006141578945', 512),   'alsckdcjs90',   SHA2('alsckdcjs90',512),   'O',   HEX(AES_ENCRYPT('의사', 'PN')), ' '  ,   '서울대학교',      HEX(AES_ENCRYPT('전주',  'PN')),  181,   '불교',      'X',   '남자',5),
('정우성',      SHA2('9009191624598', 512),   'kick486',      SHA2('kick486',512),   'AB',   HEX(AES_ENCRYPT('축구선수', 'PN')), ' '    , 'FC서울',         HEX(AES_ENCRYPT('통영', 'PN')),   174,   '무교',      'O',   '남자',5   ),
('하정우',      SHA2('9103111679456', 512),   'hahaha910311',   SHA2('hahaha910311',512),   'A',   HEX(AES_ENCRYPT('화가', 'PN')),' '  ,    '중앙대학교',      HEX(AES_ENCRYPT('서울', 'PN')),   186,   '기독교',      'O',   '남자',5   ),
('이미정',      SHA2('9201132659875', 512),   'mj920113',   SHA2('mj920113',512),   'B',   HEX(AES_ENCRYPT('승무원', 'PN')),  ' '  ,  '대한항공',      HEX(AES_ENCRYPT('대구', 'PN')),   175,   '천주교',      'O',   '여자',5   ),
('박보검',      SHA2('9202081865489', 512),   'gummy9228',   SHA2('gummy9228',512),   'A',   HEX(AES_ENCRYPT('배우', 'PN')),   ' ' ,  '명지대학교',      HEX(AES_ENCRYPT('경기', 'PN')),   178,   '힌두교',      'X',   '남자',5   ),
('이정재',      SHA2('9202121985345', 512),   'jaelee222',   SHA2('jaelee222',512),   'O',   HEX(AES_ENCRYPT('사육사', 'PN')), ' '   ,  '에버랜드',      HEX(AES_ENCRYPT('포항', 'PN')),   167,   '기독교',      'O',   '남자',5   ),
('엄기준',      SHA2('9303231658753', 512),   'werther777',   SHA2('werther777',512),   'O',   HEX(AES_ENCRYPT('사업가', 'PN')),  ' ' ,   '서강대학교',      HEX(AES_ENCRYPT('서울',  'PN')),  183,   '기독교',      'O',   '남자',5   ),
('천지영',      SHA2('9307282159753', 512),   'jychun0_0',   SHA2('jychun0_0',512),   'AB',   HEX(AES_ENCRYPT('회사원', 'PN')),   ' ' ,  'NAVER',         HEX(AES_ENCRYPT('경기', 'PN')),   171,   '기독교',      'X',   '여자',5   ),
('이승기',      SHA2('9409051689245', 512),   'rnseo1004',   SHA2('rnseo1004',512),   'A',   HEX(AES_ENCRYPT('군인', 'PN')), ' '  ,   '육군장교',      HEX(AES_ENCRYPT('강원', 'PN')),   168,   '무교',      'X',   '남자',5   ),
('최예진',      SHA2('9507282165897', 512),   'wlslwlsl123',   SHA2('wlslwlsl123',512),   'B',   HEX(AES_ENCRYPT('대학생', 'PN')), ' '  ,   '이화여자대학교',      HEX(AES_ENCRYPT('서울',  'PN')),  165,   '기독교',      'O',   '여자',5   ),
('박서준',      SHA2('9511111698753', 512),   'wnslwnsl456',   SHA2('wnslwnsl456',512),   'A',   HEX(AES_ENCRYPT('태권도선수', 'PN')), ' '  ,   '별내고등학교',      HEX(AES_ENCRYPT('광주', 'PN')),   176,   '무교',      'O',   '남자',5   ),
('김태리',      SHA2('9605092034568', 512),   'misslee5959',   SHA2('misslee5959',512),   'B',   HEX(AES_ENCRYPT('배우', 'PN')),  ' '   , '경희대학교',      HEX(AES_ENCRYPT('서울', 'PN')),   166,   '기독교',      'X',   '여자',5   ),
('강미현',      SHA2('9704242494039', 512),   'algus97',      SHA2('algus97',512),   'B',   HEX(AES_ENCRYPT('뮤지컬배우', 'PN')), ' '   ,  '세종문화회관',      HEX(AES_ENCRYPT('대구', 'PN')),   163,   '이슬람교',   'O',   '여자',5   ),
('도인실',      SHA2('9708012345925', 512),   'com0930',   SHA2('com0930',512),   'AB',   HEX(AES_ENCRYPT('대학생', 'PN')),  ' '  ,  '이화여자대학교',      HEX(AES_ENCRYPT('파주', 'PN')),   165,   '불교',      'X',   '여자',5   ),
('김연희',      SHA2('9709012147382', 512),   'kyhee3433',   SHA2('kyhee3433',512),   'O',   HEX(AES_ENCRYPT('대학생', 'PN')), ' ' ,    '이화여자대학교',      HEX(AES_ENCRYPT('서울', 'PN')),   163,   '불교',      'O',   '여자',5   ),
('지수연',      SHA2('9806232948913', 512),   'tndus123',   SHA2('tndus123',512),   'B',   HEX(AES_ENCRYPT('사업가', 'PN')),   ' '  , '이화여자대학교',      HEX(AES_ENCRYPT('대전', 'PN')),   158,   '무교',      'X',   '여자',5   ),
('김채원',      SHA2('9812312040204', 512),   'codnjs1231',   SHA2('codnjs1231',512),   'B',   HEX(AES_ENCRYPT('간호사', 'PN')), ' ' ,    '이화여자대학교',      HEX(AES_ENCRYPT('부산', 'PN')),   159,   '천주교',      'X',   '여자',5   ),
('채기준',      SHA2('9901011843575', 512),   'rlwnsl1',      SHA2('rlwnsl1',512),   'A',   HEX(AES_ENCRYPT('대학생', 'PN')), ' '   ,  '연세대학교',      HEX(AES_ENCRYPT('서울', 'PN')),   160,   '원불교',      'O',   '남자',5   ),
('차은우',      SHA2('9912131896052', 512),   'wooooo1',   SHA2('wooooo1',512),   'O',   HEX(AES_ENCRYPT('가수', 'PN')),  ' '   , '성균관대학교',      HEX(AES_ENCRYPT('목포', 'PN')),   180,   '불교',      'X',   '남자',5),
('김명',      SHA2('9913252039845', 512),   'myungmee2',   SHA2('myungmee2',512),   'O',   HEX(AES_ENCRYPT('대학생', 'PN')),' '  ,    '이화여자대학교',      HEX(AES_ENCRYPT('곡성', 'PN')),   153,   '천주교',      'X',   '여자',5   )



   ";		
	$ret= mysqli_query($con,$sql);
	if($ret){
		echo "데이터베이스를 성공적으로 생성";	
	}
	else {
		echo "데이터베이스 생성 실패"."<br>";
		echo "실패 원인 :".mysqli_error($con);	
	}
	
	mysqli_close($con);
?>

