
var sum = 0;
    $("#scroll li").each(function() {
        sum += $(this).width() + parseInt($(this).css('paddingLeft')) + parseInt($(this).css('paddingRight'))
    });
    $("#scroll").css('width', sum);

    $("#holder").mousemove(function(e) {
        x = -(((e.pageX - $('#scroll').position().left) / $("#holder").width()) * ($("#scroll").width() + parseInt($("#scroll").css('paddingLeft')) + parseInt($("#scroll").css('paddingRight')) - $("#holder").width()));

        $("#scroll").css({
            'marginLeft': x + 'px'
        });
    });


/* CSS  */

#holder {
    width: 100%;
    overflow: hidden;
}
#scroll{
    margin-left: 0;
    padding: 0;
    margin-top: 0px;
    margin-bottom: 0px;
}

#scroll li {
    float: left;
    padding: 0;
    list-style: none;
    max-width: 265px;
    height: auto;
    margin: 0;
}

#scroll li img{
    width: 100%;
    height: auto;
    cursor: pointer;
    -ms-transform: scale(1) translate3d(0px, 0px, 0px);
    -webkit-transform: scale(1) translate3d(0px, 0px, 0px);
    transform: scale(1) translate3d(0px, 0px, 0px);
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
} 

#scroll li img:hover{
    -ms-transform: scale(1.1) translate3d(0px, 0px, 0px);
    -webkit-transform: scale(1.1) translate3d(0px, 0px, 0px);
    transform: scale(1.1) translate3d(0px, 0px, 0px);
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
} 