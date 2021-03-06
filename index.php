<?php
	require_once 'vendor/autoload.php';
	$app = new \Slim\Slim();
	$app->contentType('application/json;charset=utf-8');
	$app->config('debug', false);
	
	//**Please Input Below @swag [info] /@ **//
	/*
	@swag
	 "swagger": "2.0"
	 /@
	 @swag
	"produces": [
		"application/json"
	]
	/@
	@swag
	"info" : {
        "description": "Generate Documents.json.",
        "version": "1.0.0",
        "title": "Generate Documents.json",
        "termsOfService": "",
        "contact": {
            "email": "ocsoon.jin@gmail.com"
        }
	}
	/@
	
	@swag
	"host": "demo.com"
	/@
	@swag
    "basePath": "/"
	/@
	@swag
    "tags": [
        {
            "name": "user",
            "description": "유저 관련"
        },
		{
			"name":"team",
			"description":"팀관련"
		},
		{
            "name": "character",
            "description": "영웅 관련"
        },
		{
            "name": "item",
            "description": "아이템 관련"
        },
		{
            "name": "scene",
            "description": "시나리오 관련"
        },
		{
            "name": "stage",
            "description": "스테이지 관련"
        },
		{
            "name": "friendRaid",
            "description": "친구레이드 관련"
		},
		{
            "name": "friend",
            "description": "친구"
		},
		{
            "name": "rank",
            "description": "랭킹 관련"
		}
		,{
            "name": "pvp",
            "description": "PVP 관련"
		}
		,{
			"name": "affinity",
			"description":"호감도"
		}
		,{
			"name" : "potion",
			"description" : "포션 관련"
		}
		,{
			"name" : "Mail",
			"description" : "우편함"
		}
		,{
			"name" : "Mission",
			"description" : "미션"
		}
		,{
			"name" : "TeamBattle",
			"description" : "팀배틀"
		}
		,{
			"name" : "Tutorial",
			"description" : "튜토리얼"
		}
		,{
			"name" : "Adventure",
			"description" : "모험"
		}
		,{
			"name" : "InAppPurchase",
			"description" : "IAP Test"
		}
		,{
			"name":"Banner",
			"description":"Banner Event"
		}
		,{
			"name" : "coupon",
			"description" : "Coupon API"
		}
    ]
	/@
	*/
	
	
	
	$app->get('/docAPI',function(){
		Header('Location: docAPI.php');
	});

	
?>
