$(".UpdateNavbarPartSend").click(function (){
    $(".HomeError").text('');
    $(".LogoutError").text('');
    $(".UsersByNotificationsError").text('');
    $(".AcceptError").text('');
    $(".DestroyError").text('');
    $(".updateNavbarPartSuccess").text('');

        $.get("/token", function(data, status){
            $.ajax({
                method: "POST",
                url: "/UpdateNavbar",
                data: {'_token':data,Home:$(".Home").val(),Logout:$(".Logout").val(),UsersByNotifications:$(".UsersByNotifications").val(),Accept:$(".Accept").val(),Destroy:$(".Destroy").val() },
                error: function(data) {
                    errData = JSON.stringify(data);
                    errData = jQuery.parseJSON( errData );

                    $.each(errData['responseJSON']['errors'], function( index, value ) {
                        $('.'+index+'Error').text(errData['responseJSON']['errors'][index]['0']);
                    })
                }
            })
                .done(function(result) {
                    if(result == 1){
                        $(".updateNavbarPartSuccess").text("Update completed successfully");
                    }
                })
        })
})

/** **/

$(".UpdateGroupPartSend").click(function (){

    $(".AddGroupError").text('');
    $(".GroupError").text('');
    $(".NameError").text('');
    $(".AddingError").text('');
    $(".MyGroupsError").text('');
    $(".IdContentError").text('');
    $(".MembersListError").text('');
    $(".GroupsError").text('');
    $(".EmailError").text('');
    $(".UsersError").text('');
    $(".ExpectationError").text('');
    $(".AcceptedError").text('');
    $(".InviteToGroupError").text('');
    $(".updateGroupPartSuccess").text('');


    $.get("/token", function(data, status){
        $.ajax({
            method: "POST",
            url: "/UpdateGroup",
            data: {'_token':data,
                AddGroup:$(".AddGroup").val(),
                Group:$(".Group").val(),
                Name:$(".Name").val(),
                Adding:$(".Adding").val(),
                MyGroups:$(".MyGroups").val(),
                IdContent:$(".IdContent").val(),
                MembersList:$(".MembersList").val(),
                Groups:$(".Groups").val(),
                Email:$(".Email").val(),
                Users:$(".Users").val(),
                Expectation:$(".Expectation").val(),
                Accepted:$(".Accepted").val(),
                InviteToGroup:$(".InviteToGroup").val(),
            },
            error: function(data) {
                errData = JSON.stringify(data);
                errData = jQuery.parseJSON( errData );

                $.each(errData['responseJSON']['errors'], function( index, value ) {
                    $('.'+index+'Error').text(errData['responseJSON']['errors'][index]['0']);
                })
            }
        })
            .done(function(result) {
                if(result == 1){
                    $(".updateGroupPartSuccess").text("Update completed successfully");
                }
            })
    })
})

/** **/

$.ajax({
    url: "/GetAdminDefault",
})
    .done(function(data) {
        obj = jQuery.parseJSON( data );

        console.log(obj);

        //* Navbar content *//
        $.each(obj['navbar'], function( index, value ) {
            if(index != 'id' && index != 'created_at' && index != 'updated_at'){
                $('.'+index).val(obj['navbar'][index]);
            }
        });
        //**//

        //* Group content *//
        $.each(obj['adminGroupContents'], function( index, value ) {
            if(index != 'id' && index != 'created_at' && index != 'updated_at'){
                $('.'+index).val(obj['adminGroupContents'][index]);
            }
        });
        //**//
    })
