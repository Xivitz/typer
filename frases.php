<?php


$frases = array(
	array(
		'id'    => 0,
		'texto' => 'Lorem ipsum Sit sint ullamco incididunt reprehenderit deserunt pariatur culpa minim minim sint pariatur est veniam minim in.',
		'tempo' => 15),
	array(
		'id' 	=> 1,
		'texto'	=> 'Lorem ipsum Consectetur Ut ex elit incididunt cillum do aliqua Duis tempor aliqua laboris amet nostrud elit deserunt laborum esse sed fugiat dolor proident consequat exercitation dolore minim sint nostrud incididunt mollit.',
		'tempo' => 25),
	array(
		'id' 	=> 2,
		'texto' => 'Lorem ipsum Exercitation tempor ut labore deserunt aliquip.',
		'tempo' => 5),
	array(
		'id' 	=> 3,
		'texto'	=> 'Math-Chiba semiotics cardboard skyscraper vinyl monofilament. Office A.I. advert footage augmented reality nodal point face forwards courier bomb geodesic rebar. Advert shoes nodal point footage silent denim savant numinous car grenade crypto-rifle. Voodoo god sign tiger-team rain nano-knife shanty town industrial grade post-jeans Legba chrome camera San Francisco. Cardboard realism sub-orbital carbon youtube plastic bicycle voodoo god futurity rain knife crypto-shrine rifle range-rover faded systemic.',
		'tempo' => 45),
	array(
		'id'	=> 4,
		'texto'	=> 'Shrine pistol plastic drone hacker BASE jump girl singularity drugs network 3D-printed disposable computer construct. Drugs industrial grade gang warehouse weathered nodal point savant geodesic BASE jump uplink footage free-market. Post-spook artisanal numinous rebar pre-concrete gang systema industrial grade claymore mine drugs Tokyo.-space bomb man shoes skyscraper hotdog tattoo car BASE jump free-market faded bridge decay franchise media. Papier-mache camera Kowloon modem office Legba drone towards singularity disposable cartel digital euro-pop industrial grade smart-ablative warehouse. Disposable papier-mache Shibuya A.I. 8-bit systema crypto-courier shrine dome singularity rifle savant cyber-fluidity. RAF network math-shanty town ablative Shibuya chrome corporation concrete office. Pen disposable hacker cardboard physical knife euro-pop hotdog bicycle fetishism towards nodal point math-long-chain hydrocarbons plastic RAF garage. Assault sprawl math-cardboard range-rover denim pre-disposable human neon fetishism post.',
		'tempo' => 60),
	array(
		'id'	=> 5,
		'texto' => 'Faded lights car futurity decay rain film range-rover geodesic tattoo systemic euro-pop 8-bit engine dolphin. Savant youtube free-market office camera 3D-printed dissident-ware kanji alcohol concrete papier-mache woman geodesic futurity fetishism. Motion construct digital Chiba range-rover chrome marketing soul-delay beef noodles bicycle claymore mine. Skyscraper-ware gang Kowloon film sign cardboard hotdog faded semiotics tank-traps. Olokobicho Monofilament post-alcohol spook knife grenade warehouse nodal point DIY plastic corrupted systema uplink engine advert gang. Military-grade neural wristwatch BASE jump assassin courier lights receding dome crypto. Advert corporation wonton soup meta-monofilament franchise towards sign systema j-pop narrative into voodoo god.',
		'tempo' => 90),
	array(
		'id'	=> 6,
		'texto'	=> 'Military-grade neural wristwatch BASE jump assassin courier lights receding dome crypto. Advert corporation wonton soup meta-monofilament franchise towards sign systema j-pop narrative into voodoo god.',
		'tempo'	=> 25)
	);	

header('Content-Type: application/json');
echo json_encode($frases, JSON_PRETTY_PRINT);

