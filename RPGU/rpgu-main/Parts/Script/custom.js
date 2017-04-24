//(function(){
//
//
//    setTimeout(function(){
//        var urlPage = window.location.href;
//        var index = urlPage.split('&parentId=');
//        var parentid = index[1];
//        if(!parentid){
//            return;
//        }else{
//            var titleDepartment = document.querySelector('.headerPave');
//            titleDepartment.classList.add(parentid);
//        }
//    },1000);
//
//})();
function getParentId(){
        $.ajax({
            url: '/Nvx.ReDoc.StateStructureServiceModule/ServiceController/GetCategoriesServices',
            type: 'GET',
        }).done(function(response) {
            if (response.hasError) {
                console.log(response.errorMessage);
            } else {
                console.log('ok');
            }
        })
};
getParentId();
//topParentId