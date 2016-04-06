/**
 * Created by lishuang on 2015/7/11.
 */
'use strict';



/* Filters */
// 将时间戳转换成时间的过滤器。
angular.module('app')
    .filter('simpleDate', function(TimeService) {

        return function(timestamp) {
            return TimeService.unixTimeStamp2simpleDate(timestamp);
        }
    })
    .filter('simpleDateTime', function(TimeService) {

        return function(timestamp) {
            return TimeService.unixTimeStamp2simpleDateTime(timestamp);
        }
    })

    .filter('statusNameFilter', function() {

        return function(status) {
            if(status=="NEW"){
                return "新建";
            }else if(status=="OK"){
                return "正常";
            }else if(status=="DISABLED"){
                return "被禁用";
            }else if(status=="DELETED"){
                return "删除";
            }else if(status=="ALL"){
                return "所有状态";
            }else if(status=="ON_ROAD"){
                return "尚未收录";
            }else if(status=="LOSS"){
                return "挂失";
            }else if(status=="BORROW"){
                return "已借阅";
            }else if(status=="MISSING"){
                return "图书遗失";
            }
            else{
                return "未知状态";
            }
        }
    })
    .filter('statusClassFilter', function() {

        return function(status) {
            //console.log(competitionState);
            if(status=="OK"){
                return "success";
            }else if(status=="DISABLED"){
                return "warning";
            }else if(status=="DELETED"){
                return "danger";
            }else if(status=="NEW"||status=="BORROW"){
                return "primary";
            }else if(status=="ON_ROAD"){
                return "warning";
            }else if(status=="LOSS"||status=="MISSING"){
                return "info";
            }else if(status=="ALL"){
                return "dark";
            }else{
                return "dark";
            }

        }
    })

    .filter('date2Readability',function(TimeService){
        return function(date){
            return TimeService.date2Readability(date);
        }
    })

    .filter('roleNameFilter', function() {

        return function(role) {
            if(role=="USER"){
                return "普通用户";
            }else if(role=="MANAGER"){
                return "图书馆管理员";
            }else if(role=="ADMIN"){
                return "超级管理员";
            }else if(role=="ALL"){
                return "所有用户";
            }else{
                return "未知身份";
            }
        }
    })
    .filter('roleClassFilter', function() {

        return function(role) {
            //console.log(competitionState);
            if(role=="USER"){
                return "info";
            }else if(role=="MANAGER"){
                return "primary";
            }else if(role=="ADMIN"){
                return "danger";
            }else if(role=="ALL"){
                return "dark";
            }else{
                return "default";
            }

        }
    })


;
