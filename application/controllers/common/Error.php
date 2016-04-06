<?php
namespace Common;

// 系统错误
const METHOD_NOT_EXIST=101;
const INPUT_ILLIGAL=102;
const DB_OPT_ERROR=103;

// 账号错误
const USER_EXISTED=201;
const USERNAME_IS_NULL=202;
const USERNAME_NOT_EXISTED=203;
const USER_INIT_FAILD=204;
const PHONE_IS_NULL=205;
const CAPTCHA_EXPIRE=206;
const CAPTCHA_ERROR=207;
const PASSWD_UPDATE_ERROR=208;
const INVCODE_ERROR=209;
const PASSWD_INVALID=210;
const TOKEN_IS_NULL=211;
const THIRD_LOGIN_ERROR=212;
const TOKEN_USER_NOT_MATCH=213;
const TOKEN_TIMEOUT=214;
const USER_NOT_LOGIN=215;
const PHONE_IS_EXISTED=216;
const USER_HAS_BIND=217;
const INSERT_ERROR=218;
const CAPTCHA_FREQUENT=219;
const NICKNAME_IS_NULL=220;
const NICKNAME_IS_EXISTED=221;
const IMAGE_IS_NULL=222;

// 地图错误
const MAP = 300;

// 角色错误
const PLAYER = 400;
const PLAYER_ICON_NULL = 401;
const LOW_PLAYER_LEVEL = 499;
const EP_SHORTAGE = 498;
const STATISTIC_ERROR = 402;
const STATISTIC_TYPE_IS_NULL = 403;

// 物品错误
const ITEM = 500;
const ITEM_NOT_EXISTED = 501;
const ITEM_CANNOT_USE = 502;

// 任务错误
const TASK = 600;
const ALREADY_IN_TASK = 601;
const NOT_IN_TASK = 602;
const TASK_NOT_COMPLETE = 603;
const AGREED = 604;

// 聊天室错误
const CHATROOM = 700;

// 局势
const SITUATION = 800;

// 据点
const PORTAL = 900;
const ITEM_CATEGORY_ERROR= 901;
const CAN_NOT_PUT_RES = 902;
const RES_LEVEL_ERROR = 903;
const CAMP_ERROR = 904;
const BURN_OUT = 906;
const COOL_DOWN = 907;
const CAN_NOT_PUT_EQUIP = 908;
const EQUIP_TYPE_ERROR = 909;
const LOW_EQUIP_LEVEL = 910;
const TOO_MANY_LINES = 911;
const LOW_RES = 912;
const CROSS_LINE = 913;
const PORTAL_NAME_EXIST = 914;
const PORTAL_NAMW_IS_NULL = 915;
const TOO_MANY_SLOTS_IN_LEVEL = 916;
const PORTALID_IS_NULL = 917;
const PORTALID_EXIST = 918;

function errMsg($_errCode)
{
	$msg = "";
	switch ($_errCode)
	{
		case METHOD_NOT_EXIST:
			$msg = "接口异常";
			break;
		case INPUT_ILLIGAL:
			$msg = "异常请求";
			break;
		case DB_OPT_ERROR:
			$msg = "数据库异常";
			break;
		case USER_EXISTED:
			$msg = "用户已存在";
			break;
		case USERNAME_IS_NULL:
			$msg = "用户名为空";
			break;
		case USERNAME_NOT_EXISTED:
			$msg = "用户名不存在";
			break;
		case USER_INIT_FAILD:
			$msg = "用户初始化失败";
			break;
		case PHONE_IS_NULL:
			$msg = "手机号为空";
			break;
		case CAPTCHA_EXPIRE:
			$msg = "验证码过期";
			break;
		case CAPTCHA_ERROR:
			$msg = "验证码错误";
			break;
		case PASSWD_UPDATE_ERROR:
			$msg = "密码更新失败";
			break;
		case INVCODE_ERROR:
			$msg = "邀请码错误";
			break;
		case PASSWD_INVALID:
			$msg = "密码错误";
			break;
		case TOKEN_IS_NULL:
			$msg = "第三方登陆失败";
			break;
		case THIRD_LOGIN_ERROR:
			$msg = "授权错误";
			break;
		case TOKEN_USER_NOT_MATCH:
			$msg = "授权用户信息不匹配";
			break;
		case TOKEN_TIMEOUT:
			$msg = "授权过期";
			break;

        case STATISTIC_ERROR:
            $msg = "上报统计数据异常";
            break;
		case PLAYER_ICON_NULL:
			$msg = "用户头像不存在";
			break;
		case LOW_PLAYER_LEVEL:
			$msg = "用户等级过低";
			break;
		case ITEM_NOT_EXISTED:
			$msg = "物品不存在";
			break;
		case ITEM_CANNOT_USE:
			$msg = "物品不可使用";
			break;
		case ITEM_CATEGORY_ERROR:
			$msg = "道具类型不符合要求";
			break;
		case CAN_NOT_PUT_RES:
			$msg = "无法放置";
			break;
		case RES_LEVEL_ERROR:
			$msg = "物品等级过低";
			break;
		case CAMP_ERROR:
			$msg = "该据点已被敌方占领";
			break;
        case PORTAL_NAME_EXIST:
            $msg = "该据点已经申请";
            break;
        case PORTAL_NAMW_IS_NULL:
            $msg = "据点名字为空";
            break;
		case EP_SHORTAGE:
			$msg = "能量不足";
			break;
		case BURN_OUT:
			$msg = "过载中，不可入侵";
			break;
		case COOL_DOWN:
			$msg = "冷却中，不可入侵";
			break;
		case CAN_NOT_PUT_EQUIP:
			$msg= "无法装备";
			break;
		case EQUIP_TYPE_ERROR:
			$msg = "只能升级同类型装备";
			break;
		case LOW_EQUIP_LEVEL:
			$msg = "装备等级过低，无法升级";
			break;
		case TOO_MANY_LINES;
			$msg = "该据点已有8条连出线";
			break;
		case LOW_RES;
			$msg = "据点谐振器数量不足";
			break;
		case CROSS_LINE:
			$msg = "与其他连线相交，不可连接";
			break;
		case TOO_MANY_SLOTS_IN_LEVEL:
			$msg = "当前等级的谐振器已放置到上限";
			break;
        case USER_NOT_LOGIN:
            $msg = "用户没有登陆";
            break;
		case PHONE_IS_EXISTED:
			$msg = "手机号已经存在";
			break;
		case PORTALID_IS_NULL:
			$msg = "据点没有指定";
			break;
		case PORTALID_EXIST:
			$msg = "据点已经举报或者修改";
			break;
		case USER_HAS_BIND:
			$msg = "用户已经绑定";
			break;
		case INSERT_ERROR:
			$msg = "插入失败";
			break;
		case STATISTIC_TYPE_IS_NULL:
			$msg = "统计项类型缺失";
			break;
		case CAPTCHA_FREQUENT:
			$msg = "验证码发送过于频繁";
			break;
        case NICKNAME_IS_NULL:
            $msg = "昵称库已经被用完";
            break;
        case NICKNAME_IS_EXISTED:
            $msg = "昵称已经存在";
        case ALREADY_IN_TASK:
            $msg = "已经有任务在身";
            break;
        case NOT_IN_TASK:
            $msg = "没有接受这个任务";
            break;
        case TASK_NOT_COMPLETE:
            $msg = "任务还没有完成";
            break;
        case AGREED:
            $msg = "已经点过赞了";
            break;
        case IMAGE_IS_NULL:
            $msg = "图片没有上传";
	}

	return $msg;
}
