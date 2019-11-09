
function tutupMenu() {
    console.log("tes");
    document.getElementById('sidebar').style="left:-200px; box-shadow:none";
    document.getElementById('page').style="margin-left:0px";
    document.getElementById('secondary-sidebar').style = "left:0px";
}

function bukaMenu() {
    document.getElementById('sidebar').style = "left:0px";
    document.getElementById('page').style = "margin-left:200px";
    document.getElementById('secondary-sidebar').style="left:-32px";
}

function lorem(){
    postingan.value=postingan.value+ "Culpa magna tempor officia aute incididunt. Consectetur velit quis esse occaecat fugiat aute ipsum pariatur est. Qui qui nulla culpa cillum labore. Laboris amet ea nulla amet id."
}

function onFileChange(){
    var name = document.getElementById('inputGroupFile01');
    console.log(name.value);
    var label = document.getElementById('file-label');
    label.innerText = name.value.substring(12, name.value.length);
}

function buttonUpload(){
    document.getElementById('judul2').value = document.getElementById('judul').value;
    document.getElementById('postingan2').value = document.getElementById('postingan').value;

}


//editor

function bold(){
    var textArea = document.getElementById('postingan');
    var a = textArea.selectionStart;
    var b = textArea.selectionEnd;
    var out = textArea.value.substring(0, a) + "<b>" + textArea.value.substring(a, b) + "</b>" + textArea.value.substring(b, textArea.length);
    console.log(out);
    textArea.value = out;
}

function italic() {
    var textArea = document.getElementById('postingan');
    var a = textArea.selectionStart;
    var b = textArea.selectionEnd;
    var out = textArea.value.substring(0, a) + "<i>" + textArea.value.substring(a, b) + "</i>" + textArea.value.substring(b, textArea.length);
    console.log(out);
    textArea.value = out;
}

function p(){
    var textArea = document.getElementById('postingan');
    var a = textArea.selectionStart;
    var out = textArea.value.substring(0,a)+"<p> \n"+textArea.value.substring(a,textArea.value.length);
    textArea.value = out;
    postingan.focus();
}
function br(){
    var textArea = document.getElementById('postingan');
    var a = textArea.selectionStart;
    var out = textArea.value.substring(0, a) + "<br> \n" + textArea.value.substring(a, textArea.value.length);
    textArea.value = out;
    postingan.focus();
}

function scroll(){

}
window.addEventListener('scroll', function (e) {
    // last_known_scroll_position = window.scrollY;
    if (window.scrollY < 790) {
        document.getElementById('top-menu').style = "top:-50px";
    } else {
        document.getElementById('top-menu').style = "top:0px";
    }
    // console.log(window.scrollY);
    // if (!ticking) {
    //     window.requestAnimationFrame(function () {
    //         doSomething(last_known_scroll_position);
    //         ticking = false;
    //     });

    //     ticking = true;
    // }
});

$(document).ready(function(){
    // if(document.getElementById('sidebar')!=null)
    //     tutupMenu();


})

$(document).on('ajaxComplete ready', function () {
    $('.modalMd').off('click').on('click', function () {
        $('#modalMdContent').load($(this).attr('value'));
        $('#modalMdTitle').html($(this).attr('title'));
    });
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
$(function () {
    $(document).on('click', '#showModal', function (e) {
        e.preventDefault();
        $("#myModal").modal('show');
        $.post('hasil.php',
            { id: $(this).attr('data-id') },
            function (html) {
                $(".modal-body").html(html);
            }
        );
    });
});


