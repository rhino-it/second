
var img_con = document.getElementById('f_container');
var modal_show_v = 0;
function m_mode(n) {
    modal_show_v = n;
}
function show_img(url, it1, it2,id) {
    if (modal_show_v == 1)
        add_img_glav(url, it1, it2,id)
    if (modal_show_v == 2)
        add_img_item(url, it1, it2,id);
}

function add_img_glav(url, it1, it2,id) {
    document.getElementById("img_g").src = url + it2;
    document.getElementById("g_photo").value = it1;
    document.getElementById("g_photo_thumb").value = it2;
    var img_block = document.querySelector(".img_block");
    if (document.querySelector(".img_reload") == null) {
        var img_reload = document.createElement('div');
        img_reload.innerHTML = `<i class="fa fa-refresh" aria-hidden="true"></i>`;
        img_reload.className = 'img_reload';
        img_block.appendChild(img_reload);
        img_block.classList.add("picke_d");
    }
}

function add_img_item(url, it1, it2,id) {    
    view_img(url,it2);    
    img_array.push(it1);
    img_th_array.push(it2);
    set_name();
}
function view_img( url, it2 ) {
    var img_item = document.createElement('div');
    img_item.innerHTML = `
        <div class="img" style="background-image: url(` + url + it2 + `)"></div>   
        <a class="cancels" onclick="delete_img()"><i class="fa fa-trash" aria-hidden="true"></i></a>  
        <input type="hidden" value="">              
        `;        
    img_item.className = 'fileupload-new thumbnail modal-in f_item';
    img_con.appendChild(img_item);
}
function delete_img() {
    var img_item = document.querySelector(".f_item:hover");
    var img_item_input = document.querySelector(".f_item:hover input").value;

    img_con.removeChild(img_item);
    img_array.splice(parseInt(img_item_input), 1);
    img_th_array.splice(parseInt(img_item_input), 1);
    set_name();
}
function set_name() {
    var img_item = document.querySelectorAll('.f_item input');
    for (var i = 0; i < img_item.length; i++) {
        img_item[i].value=i;
    }
    document.getElementById('img_item_array').value = img_array;
    document.getElementById('img_item_th_array').value = img_th_array;       
}

set_name();
        
function show_img_def() {
    if (img_th_array!=null) {
        for (var i = 0; i < img_array.length; i++) {
            view_img(urlb , img_th_array[i]);
        }
    }
}

show_img_def();

function copy_url(text) {
    var m1 = document.getElementById("myModal1");
    var textarea = document.createElement('textarea');
    textarea.value = text;
    m1.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    m1.removeChild(textarea);
}

function copy_urlb(text) {
    var m1 = document.getElementsByTagName("body").item(0);
    var textarea = document.createElement('textarea');
    textarea.value = text;
    m1.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    m1.removeChild(textarea);
}
        
$.ajax({
    url: BASE_URL + 'adminex/ajax/file_photo/0',
    success: function (data) {
        $('#media').html(data);
    }
});


$.ajax({
    url: BASE_URL + 'adminex/ajax/file_document/0',
    success: function (data) {
        $('#document').html(data);
    }
});


function list_photo(id)
{
    $.ajax({
        url: BASE_URL + 'adminex/ajax/file_photo/' + id,
        success: function (data) {
            $('#media').html(data);
        }
    });

}

function list_document(id)
{
    $.ajax({
        url: BASE_URL + 'adminex/ajax/file_document/' + id,
        success: function (data) {
            $('#document').html(data);
        }
    });

}


window.onload = function () {
    if (window.screen.width<=768){
        var nli=document.querySelectorAll('.notification-menu li a');
        nli[0].innerHTML = `RU`;
        nli[1].innerHTML = `KG`;
        nli[2].innerHTML = `EN`;
    }
}

// <input type="hidden" value="` + it1 + `">
// <input type="hidden" value="` + id + `">
// <input type="hidden" value="` + it2 + `">       

// <input type="hidden" name="item_ph_name" value="` + it1 + `">        
// <input type="hidden" name="item_ph_name_th" value="` + it2 + `">  