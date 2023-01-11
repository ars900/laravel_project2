$(".createGroupModal").click(function (){
    $(".GroupNameError").text('');
})


$(".CreateNewGroupRequest").click(function (){
    userId = $(this).attr("data-userId");
    groupName = $("#GroupName").val();

    $.get("/token", function(data, status){
        $.ajax({
            method: "POST",
            url: "/CreateNewGroupRequest",
            data: {'_token':data,user_id: userId,GroupName:groupName },
            error: function(data) {
                errData = JSON.stringify(data);
                errData = jQuery.parseJSON( errData );
                responseText = jQuery.parseJSON( errData['responseText'] )
                $(".GroupNameError").text(responseText['errors']['GroupName']['0']);
            }
        })
            .done(function(result) {

                if(result.indexOf("unknown")>0){
                    $(".GroupNameError").text(result);
                    return;
                }

                obj = jQuery.parseJSON( result );

                $(".GroupNameError").text('');

                $(".userGroups").append('<tr>'+
                    '<th scope="row">'+obj['userGroupByLastId']['id']+'</th>'+
                    '<td>'+obj['userGroupByLastId']['GroupName']+'</td>'+
                    '<td><button data-groupId = "'+obj['userGroupByLastId']['id']+'" data-bs-toggle="modal" data-bs-target="#memberList" type="button" class="btn btn-outline-secondary RequestUserGroupMembers">Members List</button></td>'+
                    '</tr>');
            });
    })
})


$(".RequestUserGroupMembers").click(function (){
    $("#memberListLabel").text('');
    $(".member_list").html('');

    $(".UserName").text('');
    $(".UserNameContent").text('');

    groupId = $(this).attr("data-groupId");

    $.get("/token", function(data, status){
        $.ajax({
            method: "POST",
            url: "/RequestUserGroupMembers",
            data: {'_token':data,groupId:groupId }
        })
            .done(function(result) {

                if(result.indexOf("Error") == 0){
                    $(".member_list").addClass("text-danger");
                    $(".member_list").text(result);
                    return;
                }

                obj = jQuery.parseJSON( result );

                $("#memberListLabel").text(obj['Name']);

                if(obj['Members'] != undefined){
                    for (var i = 0; i < obj['Members'].length; i++) {
                        $(".member_list").append("<p>"+obj['Members'][i]['groupMemberEmail']+"</p>");
                    }
                }

                $( document ).ready(function() {
                    $(".UserName").next().text('');
                    $(".UserName").text("User is ");
                    $(".UserName").after("<span style = 'top:43px;left:213px' class = 'text-info position-absolute UserNameContent'>"+obj['UserEmail']['email']+"</span>");
                });
            })
    })
})

$(document).on("click",".RequestUserGroupMembersMore",function() {
    $("#memberListLabel").text('');
    $(".member_list").html('');

    $(".UserName").text('');
    $(".UserNameContent").text('');

    groupId = $(this).attr("data-groupId");

    $.get("/token", function(data, status){
        $.ajax({
            method: "POST",
            url: "/RequestUserGroupMembersMore",
            data: {'_token':data,groupId:groupId }
        })
            .done(function(result) {

                if(result.indexOf("Error") == 0){
                    $(".member_list").addClass("text-danger");
                    $(".member_list").text(result);
                    return;
                }


                obj = jQuery.parseJSON( result );

                $(".member_list").removeClass("text-danger");

                $("#memberListLabel").text(obj['Name']);

                if(obj['Members'] != undefined){
                    for (var i = 0; i < obj['Members'].length; i++) {
                        $(".member_list").append("<p>"+obj['Members'][i]['groupMemberEmail']+"</p>");
                    }
                }

                $(".UserName").next().text('');
                $(".UserName").text("User is ");
                $(".UserName").after("<span style = 'top:43px;left:213px' class = 'text-info position-absolute UserNameContent'>"+obj['UserEmail']['email']+"</span>");

            })
    })
})


$(".UserComonMyGroupRequest").click(function (){
    $(".userGroupsByAdd").html('');

    $(".AddingToMyGroup").attr("data-receivedId",$(this).attr("data-receivedId"));
    receivedId = $(this).attr("data-receivedId");

    WaitingForExpectations = jQuery.parseJSON($("#custId").val());
    userGroups = jQuery.parseJSON($("#userGroups").val());

    if(typeof obj != 'undefined'){
        if(typeof obj['WaitingForExpectations'] != 'undefined' && obj['WaitingForExpectations'].length != 0){
            WaitingForExpectations = obj['WaitingForExpectations'];
        }
    }

    for (var i = 0; i < userGroups.length; i++) {
        $(".userGroupsByAdd").append('<tr>'+
            '<th scope="row">'+userGroups[i]['id']+'</th>'+
            '<td>'+userGroups[i]['GroupName']+'</td>'+
            '<td><div class = "button-status"><button data-requestId = "'+userGroups[i]['user_id']+'" data-receivedId = "'+receivedId+'" data-groupName = "'+userGroups[i]['GroupName']+'" data-groupId = "'+userGroups[i]['id']+'" type="button" class="position-relative btn btn-success AddingToMyGroup">Add</button><span class = "ms-2 text-danger opacity-0 userError">User Error</span></div></td>'+
            '</tr>');
    }

    $.each($(".AddingToMyGroup"), function( index,value ) {
        for (var i = 0; i < WaitingForExpectations.length; i++) {
            if($(value).attr("data-requestid") == WaitingForExpectations[i]['requestId'] && $(value).attr("data-receivedId") == WaitingForExpectations[i]['receivedId'] && $(value).attr("data-groupId") == WaitingForExpectations[i]['groupId']){
                $(this).parent().html('<button type="button" class="btn btn-outline-secondary exp" disabled>'+WaitingForExpectations[i]['status']+'</button>');
            }
        }
    });
})


$(document).on("click",".AddingToMyGroup",function() {
    thisButton = $(this).parent();
    thisButtonNext = $(this);

    requestId = $(this).attr("data-requestId");
    receivedId = $(this).attr("data-receivedId");
    groupName = $(this).attr("data-groupName");
    groupId = $(this).attr("data-groupId");


    if(typeof sendRequest != 'undefined' && sendRequest == 'go'){
        return;
    }
    else{
        sendRequest = 'go'
        xmlRequest = $.get("/token", function(data, status){

            var ajaxTime= new Date().getTime();

            $.ajax({
                method: "POST",
                url: "/AddingToMyGroup",
                data: {'_token':data,groupId:groupId, requestId: requestId, receivedId: receivedId, groupName:groupName,status: 'Expectation...'}
            })
                .done(function(result) {

                    if(result.indexOf("Error") >= 0){
                        $(thisButtonNext).next().removeClass("opacity-0");
                        return;
                    }

                    obj = jQuery.parseJSON( result );

                    if(obj['WaitingForExpectations'].length != 0){
                        $(thisButton).html('<button type="button" class="btn btn-outline-secondary" disabled>Expectation...</button>')
                    }

                    var totalTime = new Date().getTime()-ajaxTime;

                    setTimeout(() => {
                        sendRequest = 'finish';
                    }, totalTime + 300)
                });
        })
    }
})


$(".AcceptRequest").click(function (){
    DestroyElem =  $(this).parent().parent();
    requestId = $(this).attr("data-requestId");
    groupId = $(this).attr("data-groupId");
    groupName = $(this).attr("data-GroupName");
    groupUserId = $(this).attr("data-GroupName");
    groupMemberId = $(this).attr("data-groupMemberId");
    groupMemberEmail = $(this).attr("data-groupMemberEmail");

    if(typeof AcceptRequest != 'undefined' && AcceptRequest == ''){
        return;
    }
    else{
        AcceptRequest = '';
        $.get("/token", function(data, status){

            var ajaxTime= new Date().getTime();

            $.ajax({
                method: "POST",
                url: "/GroupRequestStatusAccept",
                data: {'_token':data, groupMemberId:groupMemberId, groupMemberEmail:groupMemberEmail, groupUserId: requestId,groupId:groupId,groupName:groupName }
            })
                .done(function(result) {
                    obj = jQuery.parseJSON( result );

                    $(DestroyElem).remove();

                    if($(".GroupMembersModal").children().length == 0){
                        $(".notice").text('');
                    }
                    else{
                        $(".notice").text($(".GroupMembersModal").children().length);
                    }

                    $(".OtherGroups").append('<tr>'+
                        '<th scope="row">'+obj['GroupsByAutorMoreUser']['groupId']+'</th>'+
                        '<td>'+obj['GroupsByAutorMoreUser']['groupName']+'</td>'+
                        '<td><button data-groupId = "'+obj['GroupsByAutorMoreUser']['groupId']+'" data-bs-toggle="modal" data-bs-target="#memberList" type="button" class="btn btn-outline-secondary RequestUserGroupMembersMore">Members List</button></td>'+
                        '</tr>');

                    var totalTime = new Date().getTime()-ajaxTime;

                    setTimeout(() => {
                        AcceptRequest = 'finish';
                    }, totalTime + 300)
                });
        })
    }
})

$(".DestroyRequest").click(function (){
    DestroyElem =  $(this).parent().parent();
    requestId = $(this).attr("data-requestId");
    groupId = $(this).attr("data-groupId");


    if(typeof DestroyRequest != 'undefined' && DestroyRequest == ''){
        return;
    }
    else{
        DestroyRequest = '';
        $.get("/token", function(data, status){

            var ajaxTime= new Date().getTime();

            $.ajax({
                method: "POST",
                url: "/GroupRequestStatusDestroy",
                data: {'_token':data,requestId: requestId,groupId:groupId }
            })
                .done(function(result) {

                    if(result == 1){
                        $(DestroyElem).remove();

                        if($(".GroupMembersModal").children().length == 0){
                            $(".notice").text('');
                        }
                        else{
                            $(".notice").text($(".GroupMembersModal").children().length);
                        }
                    }

                    var totalTime = new Date().getTime()-ajaxTime;

                    setTimeout(() => {
                        DestroyRequest = 'finish';
                    }, totalTime + 300)

                });
        })
    }
})






