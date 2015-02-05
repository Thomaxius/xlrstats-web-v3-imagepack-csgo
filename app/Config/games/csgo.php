<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Config.games
 * @since         XLRstats v3.0
 * @version       0.1
 * Credits:       Half assed port from cod2.php by Thomaxius, all of the art is taken from 
 * 		  http://counterstrike.wikia.com/
 */

$config = array(
	'gameName' => 'Counter-Strike: Global Offensive',

	/**
	 * Team names
	 */
	'teams' => array(
		'3' => 'Terrorists',		// Red team
		'2' => 'Counter Terrorists',	// Blue team
		'1' => 'Spectators'
	),


	'maps' => array(
		//Map Image Path
		'image_path' => '/img-packs/csgo/maps/',

		//*********************
		// Map names
		//*********************
		// Stock CoD
		'cs_italy' => array('cs_italy', 'description', 'cs_italy.png'),
		'cs_office' => array('cs_office', 'description', 'cs_office.png'),
		'cs_assault' => array('cs_assault', 'description', 'cs_assault.png'),
		'cs_militia' => array('cs_militia', 'description', 'cs_militia.png'),        
		'de_aztec' => array('de_aztec', 'description', 'de_aztec.png'),
		'de_dust' => array('de_dust', 'description', 'de_dust.png'),
		'de_dust2' => array('de_dust2', 'description', 'de_dust2.png'),
		'de_inferno' => array('de_inferno', 'description', 'de_inferno.png'),
		'de_nuke' => array('de_nuke', 'description', 'de_nuke.png'),
		'de_shorttrain' => array('de_shorttrain', 'description', 'de_shorttrain.png'),
		'de_shortdust' => array('de_shortdust', 'description', 'de_shortdust.png'),        
		'ar_baggage' => array('ar_baggage', 'description', 'ar_baggage.png'),
		'ar_shoots' => array('ar_shoots', 'description', 'ar_shoots.png'),
		'ar_monastery' => array('ar_monastery', 'description', 'ar_monastery.png'),
		'de_mirage' => array('de_mirage', 'description', 'de_mirage.png'),   
		'de_bank' => array('de_bank', 'description', 'de_bank.png'),
		'de_cache' => array('de_cache', 'description', 'de_cache.png'),
		'de_vertigo' => array('de_vertigo', 'description', 'de_vertigo.png'),
		'de_lake' => array('de_lake', 'description', 'de_lake.png'),
		'de_safehouse' => array('de_safehouse', 'description', 'de_safehouse.png'),
		'de_sugarcane' => array('de_sugarcane', 'description', 'de_sugarcane.png'),
		'de_stmarc' => array('de_stmarc', 'description', 'de_stmarc.png'),
		'de_train' => array('de_train', 'description', 'de_train.png'),
		'de_cbble' => array('de_cbble', 'description', 'de_cbble.png'),
		'de_overpass' => array('de_overpass', 'description', 'de_overpass.png'),                
		'training1' => array('training1', 'description', 'training1.png'),
		'unknown' => array('Custom Map', 'description', 'unknown.png'),
		'None' => array('-Unknown-', 'description', 'image.png'),
	),

	'weapons' => array(
		//Weapon Image Path
		'image_path' => '/img-packs/csgo/weapons/',

		//*********************
		// Weapons names
		//*********************
		//Stock CoD
        'ak47' => array('AK-47', 'description', 'Ak47.png'),
        'aug' => array('AUG', 'description', 'Aug.png'),
        'famas' => array('Famas', 'description', 'famas.png'),
        'g3sg1' => array('G3SG1', 'description', 'G3SG1.png'),
        'galilar' => array('Galil AR', 'description', 'galilar.png'),
        'm4a1' => array('M4A4', 'description', 'M4A4.png'),
        'm4a1_silencer' => array('M4A1 Silenced', 'description', 'M4A1s.png'),
        'usp_silencer' => array('USP Silenced', 'description', 'uspsilenced.png'),
        'awp' => array('AWP', 'description', 'AWP.png'),
        'm249' => array('M249 SAW', 'description', 'M249.png'),
        'mac10' => array('MAC-10', 'description', 'mac10.png'),
        'p90' => array('P90', 'description', 'P90.png'),
        'ump45' => array('UMP45', 'description', 'ump45.png'),
        'fiveseven' => array('Five-seveN', 'description', 'fiveseven.png'),		
        'elite' => array('Dual berettas', 'description', 'elite.png'),
        'glock' => array('G18', 'description', 'glock.png'),		
        'xm1014' => array('XM1014', 'description', 'M1014.png'),
        'bizon' => array('PP-Bizon', 'description', 'Pp19.png'),
        'mag7' => array('MAG-7', 'description', 'Mag7.png'),
        'deagle' => array('Desert eagle', 'description', 'deagle.png'),
        'negev' => array('Negev', 'description', 'Negev.png'),
        'sawedoff' => array('Sawed-Off', 'description', 'sawedoff.png'),
        'tec9' => array('TEC-9', 'description', 'Tec9.png'),
        'taser' => array('Zeus x27 taser', 'description', 'Zeus.png'),
        'hkp2000' => array('P2000', 'description', 'P2000.png'),
        'mp7' => array('MP7', 'description', 'Mp7.png'),
        'mp9' => array('MP9', 'description', 'Mp9.png'),
        'nova' => array('Nova pump', 'description', 'Nova.png'),
        'p250' => array('P250', 'description', 'P250.png'),
        'scar20' => array('SCAR-20', 'description', 'Scar20.png'),
        'sg556' => array('SG556', 'description', 'sg556.png'),
        'ssg08' => array('SSG08', 'description', 'Ssg08.png'),
        'knife_t' => array('Knife', 'description', 'Knife.png'),
        'flashbang' => array('Flashbang', 'description', 'Flash.png'),
        'hegrenade' => array('Hegrenade', 'description', 'Gren.png'),
        'smokegrenade' => array('Smoke grenade', 'description', 'Smokegren.png'),
        'molotov' => array('Molotov', 'description', 'Molo.png'),
        'decoy' => array('Decoy grenade', 'description', 'Decoy.png'),
        'incgrenade' => array('Incendiary grenade', 'description', 'Incen.png'),
		'none' => array('Bad luck...', 'description', 'image.png'),
	),

	/**
	 * Personal Achievements, pins, ribbons, medals
	 */
	'achievements' => array(
		'Machine gun' => array(
			'negev',
			'm249',
		),
		'Pistol' => array(
			'glock',
			'p250',
			'deagle',
			'elite',
			'tec9',
			'cz75a',
			'p2000',
			'p250',
			'fiveseven',
		),
		'Sniper' => array(
			'awp',
			'ssg08',
            'G3SG1',
            'SCAR-20',
		),
		'Shotgun' => array(
			'xm1014',
			'sawedoff',
			'nova',
            'mag7',
		),
		'Rifles' => array(
			'galilar',
			'ak47',
			'm4a1',
			'm4a1_silenced',
			'famas',
			'aug',            
			'sg553',
		),            
	),


		//*********************
		// Event names
		//*********************
	'events' => array(
	'Planted_The_Bomb' => array('Bombs planted', 'description', 'image.png'),
	'Dropped_The_Bomb' => array('Bombs dropped', 'description', 'image.png'),
    'Got_The_Bomb' => array('Bombs picked', 'description', 'image.png'),
    'Defused_The_Bomb' => array('Bombs defused', 'description', 'image.png'),    
//	'Begin_Bomb_Defuse_Without_Kit' => array('Bomb defuse without kit', 'description', 'image.png'), // useless, i guess? 
//	'Begin_Bomb_Defuse_With_Kit' => array('Bomb defuse with kit', 'description', 'image.png'), // useless, i guess?
    'round_mvp' => array('Times been the MVP', 'description', 'image.png'),
    'Rescued_A_Hostage' => array('Rescued a hostage', 'description', 'image.png'),
//	'Touched_A_Hostage' => array('Touched a hostage', 'description', 'image.png'), // useless, i guess?
	'Escaped_As_VIP' => array('Escaped as the VIP', 'description', 'image.png'),
//	    'Became_VIP' => array('Became VIP', 'description', 'image.png'), // useless, i guess, unless one wants to see who is the best vip (escapes - times been the vip)
    'Killed_A_Hostage' => array('Killed a hostage', 'description', 'image.png'),    
	),


	/**
	 * Bodypart names
	 */
	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'head' => array('head' => 'Head'),
		'body' => array('body' => 'body'),
	),

);
