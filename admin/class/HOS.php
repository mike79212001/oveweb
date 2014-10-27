<?php
require_once ("class/HOS_DB.php");

class HeroData 
{
	var $name_;
	var $come_from_;
	var $major_;
	var $second_major_;
	var $story_;
	var $suggest_;
	
	var $health_;
	var $health_regain_;
	var $mana_;
	var $mana_regain_;
	var $attack_;
	var $attack_speed_;
	
	var $health_per_level_;
	var $health_regain_per_level_;
	var $mana_per_level_;
	var $mana_regain_per_level_;
	var $attack_per_level_;
	var $attack_speed_per_level_;
}

class AbilityData 
{
	var $name_;
	var $type_;
	var $cool_down_;
	var $cost_;
	var $cost_type_;
	var $time_;
	var $range_;
	var $description_;
}

class HeroAbilityData 
{
	var $uid_;
	var $id_;
	var $type_;
	var $button_;
	var $level_;
}

function addHero($heroData) 
{
	$db = new HOS_DB();
	$rc = $db->insert("
			INSERT INTO hero (id, 
			name, come_from, major, second_major, 
			story, suggest, health, health_regain, 
			mana, mana_regain, attack, attack_speed, 
			health_per_level, health_regain_per_level, 
			mana_per_level, mana_regain_per_level, attack_per_level, 
			attack_speed_per_level) 
			
			VALUES (NULL, '$heroData->name_', '$heroData->come_from_',
			'$heroData->major_', '$heroData->second_major_', '$heroData->story_',
			'$heroData->suggest_', '$heroData->health_', '$heroData->health_regain_',
			'$heroData->mana_', '$heroData->mana_regain_', '$heroData->attack_', '$heroData->attack_speed_',
			'$heroData->health_per_level_', '$heroData->health_regain_per_level_', 
			'$heroData->mana_per_level_', '$heroData->mana_regain_per_level_', '$heroData->attack_per_level_',
			'$heroData->attack_speed_per_level_')");	
	return $rc;
}

function removeHero($heroID) 
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM hero WHERE id='$heroID'");
	return $rc;
}

function updateHero($id, $heroData) 
{
	$db = new HOS_DB();
	$rc = $db->update("UPDATE `hero` SET 	`name`='$heroData->name_',
											`come_from`='$heroData->come_from_',
											`major`='$heroData->major_',
											`second_major`='$heroData->second_major_',
											`story`='$heroData->story_',
											`suggest`='$heroData->suggest_',
											`health`='$heroData->health_',
											`health_regain`='$heroData->health_regain_',
											`mana`='$heroData->mana_',
											`mana_regain`='$heroData->mana_regain_',
											`attack`='$heroData->attack_',
											`attack_speed`='$heroData->attack_speed_',
											`health_per_level`='$heroData->health_per_level_',
											`health_regain_per_level`='$heroData->health_regain_per_level_',
											`mana_per_level`='$heroData->mana_per_level_',
											`mana_regain_per_level`='$heroData->mana_regain_per_level_',
											`attack_per_level`='$heroData->attack_per_level_',
											`attack_speed_per_level`='$heroData->attack_speed_per_level_'
					   WHERE id='$id'");
	return $rc;
}

function addAbility($data) 
{
	$db = new HOS_DB();
	$rc = $db->insert("	INSERT INTO `ability`(`id`, `name`, `type`, `cool_down`, `cost`, `cost_type`, `time`, `range`, `description`) 
						VALUES (NULL, 
								'$data->name_', 
								'$data->type_', 
								'$data->cool_down_', 
								'$data->cost_', 
								'$data->cost_type_', 
								'$data->time_', 
								'$data->range_', 
								'$data->description_')");
	
	return $rc;
}

function removeAbility($id) 
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM ability WHERE id='$id'");
	return $rc;
}

function updateAbility($id, $data) 
{
	$db = new HOS_DB();
	$rc = $db->update("	UPDATE `ability` SET 	`name`='$data->name_',
												`type`='$data->type_',
												`cool_down`='$data->cool_down_',
												`cost`='$data->cost_',
												`cost_type`='$data->cost_type_',
												`time`='$data->time_',
												`range`='$data->range_',
												`description`='$data->description_'
						WHERE id='$id'");
	return $rc;
}

function addGraph($id, $type, $path, $description) 
{
	$db = new HOS_DB();
	$rc = $db->insert("	INSERT INTO `graph`(`number`, `id`, `type`, `path`, `description`) 
						VALUES (NULL,
								'$id',
								'$type',
								'$path',
								'$description')");
	return $rc;
}

function removeGraph($id, $type, $description) 
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM graph WHERE id='$id' AND type='$type' AND description='$description'");
	return $rc;
}

function removeGraphByHero($id)
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM graph WHERE id='$id' AND type='英雄'");
	return $rc;
}

function removeGraphByAbility($id)
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM graph WHERE id='$id' AND type!='英雄'");
	return $rc;
}

function updateGraph($id, $type, $path, $description) 
{
	$db = new HOS_DB();
	$rc = $db->update("	UPDATE `graph` SET 	`path`='$path',
											`description`='$description' 
						WHERE id='$id' AND type='$type'");
	return $rc;
}

function addHeroAbility($data) 
{
	$db = new HOS_DB();
	$rc = $db->insert("
			INSERT INTO `heroability`(`number`, `uid`, `id`, `type`, `button`, `level`) 
			VALUES (NULL,
					'$data->uid_',
					'$data->id_',
					'$data->type_',
					'$data->button_',
					'$data->level_')");
	return $rc;
}

function removeHeroAbility($uid, $id) 
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM heroability WHERE uid='$uid' AND id='$id'");
	return $rc;
}

function removeHeroAbilityByHero($id)
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM heroability WHERE uid='$id'");
	return $rc;
}

function removeHeroAbilityByAbility($id)
{
	$db = new HOS_DB();
	$rc = $db->delete("DELETE FROM heroability WHERE id='$id'");
	return $rc;
}

function updateHeroAbility($uid, $id, $data) 
{
	$db = new HOS_DB();
	$rc = $db->update("
			UPDATE `heroability` SET	`type`='$data->type_',
										`button`='$data->button_',
										`level`='$data->level_' 
			WHERE uid='$uid' AND id='$id'");
	return $rc;
}

function getHero($id) 
{
	$db = new HOS_DB();
	$rc = $db->query("	SELECT *
						FROM hero
						WHERE id='$id'");
	return $db->fetch_array();
}

function getHeroName($id) 
{
	$db = new HOS_DB();
	$rc = $db->query("	SELECT name
						FROM hero
						WHERE id='$id'");
	$hero = $db->fetch_array(); 
	return $hero['name'];
}

function getAllHero() 
{
	$db = new HOS_DB();
	$db->query("	SELECT *
					FROM hero
					ORDER BY name ASC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getAllHeroName() 
{
	$db = new HOS_DB();
	$db->query("	SELECT name
					FROM hero
					ORDER BY name ASC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re['name']);
	return $list;
}

function getComefromCheck($id, $radio) 
{
	$db = new HOS_DB();
	$db->query("	SELECT come_from
					FROM hero
					WHERE id='$id'");
	$re = $db->fetch_array();
	$come_from = $re['come_from'];
	
	if($come_from == $radio) return "checked";
	else return "";
}

function getMajorCheck($id, $radio) 
{
	$db = new HOS_DB();
	$db->query("	SELECT major
					FROM hero
					WHERE id='$id'");
	$re = $db->fetch_array();
	if($re['major'] == $radio) return "checked";
	else return "";
}

function getAbility($id) 
{
	$db = new HOS_DB();
	$db->query("	SELECT *
					FROM ability
					WHERE id='$id'");
	return $db->fetch_array();
}

function getAllAbility($type) 
{
	$db = new HOS_DB();
	$db->query("	SELECT *
					FROM ability
					WHERE type='$type'
					ORDER BY name ASC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getUnusedAbility()
{
	$db = new HOS_DB();
	$list = array();
	
	$db->query("	SELECT *
					FROM ability 
					WHERE id NOT IN 
								(
								SELECT id
								FROM heroability
								)
					ORDER BY type DESC, name ASC");
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getTypeCheck($id, $radio) 
{
	$db = new HOS_DB();
	$db->query("	SELECT type
					FROM ability
					WHERE id='$id'");
	$re = $db->fetch_array();
	if($re['type'] == $radio)
		return "checked";
	else
		return "";
}

function getCostTypeCheck($cost_type, $current)
{
	if($cost_type == $current) return "checked";
	else return "";
}

function getHeroAbility($uid, $id) 
{
	$db = new HOS_DB();
	$re = $db->query("	SELECT *
						FROM heroability
						WHERE uid='$uid' AND id='$id'");
	return $db->fetch_array();
}

function getHeroAbilityTypeCheck($uid, $id, $radio) 
{
	$db = new HOS_DB();
	$db->query("	SELECT type
					FROM heroability
					WHERE uid='$uid' AND id='$id'");
	$re = $db->fetch_array();
	if($re['type'] == $radio)
		return "checked";
	else
		return "";
}

function getHeroPassiveAbility($id) 
{
	$db = new HOS_DB();
	$re = $db->query("	SELECT A.name, H.*
						FROM heroability as H, ability as A
						WHERE H.uid='$id' AND H.id=A.id AND H.type='特性'
						ORDER BY name ASC");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getHeroSkills($id) 
{
	$db = new HOS_DB();
	$list = array();
	
	$re = $db->query("	SELECT A.name, H.*
			FROM heroability as H, ability as A
			WHERE H.uid='$id' AND H.id=A.id AND H.type='技能'
			ORDER BY ( CASE H.button 
						WHEN 'Q' THEN '1'
					 	WHEN 'W' THEN '2'
						WHEN 'E' THEN '3'
						WHEN 'R' THEN '4'
						WHEN '' THEN '5'
					 	END)");
	while($re = $db->fetch_array()) array_push($list, $re);
	
	return $list;
}

function getHeroTelents($id) 
{
	$db = new HOS_DB();
	$re = $db->query("	SELECT A.name, H.*
						FROM heroability as H, ability as A
						WHERE H.uid='$id' AND H.id=A.id AND H.type='天賦'
						ORDER BY level ASC, ( CASE button 
											WHEN 'Q' THEN '1'
										 	WHEN 'W' THEN '2'
											WHEN 'E' THEN '3'
											WHEN 'R' THEN '4'
											WHEN '' THEN '5'
										 	END)");
	$list = array();
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getUnsetGraphAbility()
{
	$db = new HOS_DB();
	$list = array();
	
	$db->query("	SELECT *
					FROM ability
					WHERE id NOT IN
								(
								SELECT id
								FROM graph
								WHERE type!='英雄'
								)
					ORDER BY type DESC, name ASC");
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getUnsetGraphHero()
{
	$db = new HOS_DB();
	$list = array();

	$db->query("	SELECT *
					FROM hero
					WHERE id NOT IN
								(
								SELECT id
								FROM graph
								WHERE type='英雄'
								)
					ORDER BY name ASC");
	while($re = $db->fetch_array()) array_push($list, $re);
	return $list;
}

function getSetGraph()
{
	$db = new HOS_DB();
	$list = array();
	
	$db->query("	SELECT H.id, H.name, G.type, G.description
					FROM hero as H, graph as G
					WHERE H.id=G.id AND G.type='英雄'
					ORDER BY name ASC");
	while($re = $db->fetch_array()) array_push($list, $re);
	
	$db->query("	SELECT A.id, A.name, G.type, G.description
					FROM ability as A, graph as G
					WHERE A.id=G.id AND G.type!='英雄'
					ORDER BY type DESC, name ASC");
	while($re = $db->fetch_array()) array_push($list, $re);
	
	return $list;
}


function getHeroGraph($id) 
{
	$db = new HOS_DB();
	$db->query("	SELECT G.*, H.name
					FROM graph as G, hero as H
					WHERE G.id='$id' AND G.type='英雄' AND G.id=H.id");
	return $db->fetch_array();
}

function getAbilityGraph($id)
{
	$db = new HOS_DB();
	$db->query("	SELECT G.*, A.name
					FROM graph as G, ability as A
					WHERE G.id='$id' AND G.type!='英雄' AND G.id=A.id");
	return $db->fetch_array();
}

function getHeroGraphDescriptionCheck($description, $current)
{
	if($description == $current) return "checked";
	else return "";
}

function getAbilityGraphTypeCheck($type, $current)
{
	if($type == $current) return "checked";
	else return "";
}


?>