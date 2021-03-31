<?php 
  require 'sendMessage.php';

  $flexDataJson = '{
	  "type": "flex",
	  "altText": "Flex Message",
	  "contents": {
	    "type": "carousel",
	    "contents": [
	      {
	        "type": "bubble",
	        "hero": {
	          "type": "image",
	          "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_5_carousel.png",
	          "size": "full",
	          "aspectRatio": "20:13",
	          "aspectMode": "cover"
	        },
	        "body": {
	          "type": "box",
	          "layout": "vertical",
	          "spacing": "sm",
	          "contents": [
	            {
	              "type": "text",
	              "text": "Arm Chair, White",
	              "size": "xl",
	              "weight": "bold",
	              "wrap": true
	            },
	            {
	              "type": "box",
	              "layout": "baseline",
	              "contents": [
	                {
	                  "type": "text",
	                  "text": "$49",
	                  "flex": 0,
	                  "size": "xl",
	                  "weight": "bold",
	                  "wrap": true
	                },
	                {
	                  "type": "text",
	                  "text": ".99",
	                  "flex": 0,
	                  "size": "sm",
	                  "weight": "bold",
	                  "wrap": true
	                }
	              ]
	            }
	          ]
	        },
	        "footer": {
	          "type": "box",
	          "layout": "vertical",
	          "spacing": "sm",
	          "contents": [
	            {
	              "type": "button",
	              "action": {
	                "type": "uri",
	                "label": "Add to Cart",
	                "uri": "https://linecorp.com"
	              },
	              "style": "primary"
	            },
	            {
	              "type": "button",
	              "action": {
	                "type": "uri",
	                "label": "Add to whishlist",
	                "uri": "https://linecorp.com"
	              }
	            }
	          ]
	        }
	      },
	      {
	        "type": "bubble",
	        "hero": {
	          "type": "image",
	          "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_6_carousel.png",
	          "size": "full",
	          "aspectRatio": "20:13",
	          "aspectMode": "cover"
	        },
	        "body": {
	          "type": "box",
	          "layout": "vertical",
	          "spacing": "sm",
	          "contents": [
	            {
	              "type": "text",
	              "text": "Metal Desk Lamp",
	              "size": "xl",
	              "weight": "bold",
	              "wrap": true
	            },
	            {
	              "type": "box",
	              "layout": "baseline",
	              "flex": 1,
	              "contents": [
	                {
	                  "type": "text",
	                  "text": "$11",
	                  "flex": 0,
	                  "size": "xl",
	                  "weight": "bold",
	                  "wrap": true
	                },
	                {
	                  "type": "text",
	                  "text": ".99",
	                  "flex": 0,
	                  "size": "sm",
	                  "weight": "bold",
	                  "wrap": true
	                }
	              ]
	            },
	            {
	              "type": "text",
	              "text": "Temporarily out of stock",
	              "flex": 0,
	              "margin": "md",
	              "size": "xxs",
	              "color": "#FF5551",
	              "wrap": true
	            }
	          ]
	        },
	        "footer": {
	          "type": "box",
	          "layout": "vertical",
	          "spacing": "sm",
	          "contents": [
	            {
	              "type": "button",
	              "action": {
	                "type": "uri",
	                "label": "Add to Cart",
	                "uri": "https://linecorp.com"
	              },
	              "flex": 2,
	              "color": "#AAAAAA",
	              "style": "primary"
	            },
	            {
	              "type": "button",
	              "action": {
	                "type": "uri",
	                "label": "Add to wish list",
	                "uri": "https://linecorp.com"
	              }
	            }
	          ]
	        }
	      },
	      {
	        "type": "bubble",
	        "body": {
	          "type": "box",
	          "layout": "vertical",
	          "spacing": "sm",
	          "contents": [
	            {
	              "type": "button",
	              "action": {
	                "type": "uri",
	                "label": "See more",
	                "uri": "https://linecorp.com"
	              },
	              "flex": 1,
	              "gravity": "center"
	            }
	          ]
	        }
	      }
	    ]
	  }
	}';
  $flexDataJsonDeCode = json_decode($flexDataJson,true);
  $datas['url'] = "https://api.line.me/v2/bot/message/push";
  $datas['token'] = "<access token>";
  $messages['to'] = "<user id>";
  $messages['messages'][] = $flexDataJsonDeCode;
  $encodeJson = json_encode($messages);


  sentMessage($encodeJson,$datas);
?>