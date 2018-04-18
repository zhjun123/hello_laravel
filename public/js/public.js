function drop_confirm(url,msg) {
    layer.confirm(msg, {
        btn: ['确定','取消'] //按钮
    }, function(){
        layer.location(url);
    }, function(){
        layer.close();
    });
}