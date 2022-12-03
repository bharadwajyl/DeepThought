//Global variables
var thread_count = $(".create_thread").parent().children().length;
var thread_count_2 = $(".create_example").parent().children().length-2;

$(".acc_checkbox").on("change", function(){
    if ($(this).is(':checked')){
        if ($(this).parent().parent().hasClass("accordion_5")){
            $(this).parent().next().children("audio").attr("src","https://file-examples.com/storage/fe352586866388d59a8918d/2017/11/file_example_MP3_700KB.mp3");
        }
        $(this).parent().next().css('height','50vh');
        $(this).parent().next().css('padding','1rem');
    } else {
        $(this).parent().next().css('height','0vh');
        $(this).parent().next().css('padding','0rem');
    }
});


function ShowThread(e){
    if ($(e).is(':checked')){
        $(e).parent().next().css('display','block');
    } else {
        $(e).parent().next().css('display','none');
    }
}


function SubThread(e){
        $(e).parent().prev().append('<div class="thread_s1 flex"> <section class="flex-content"><h6>Sub Thread</h6><textarea placeholder="Enter Text Here"></textarea></section><section class="flex-content"><h6>Sub Interpretation</h6><textarea placeholder="Enter Text Here"></textarea></section></div> <div class="thread_s2 flex"><a href="#"><i class="fa fa-lightbulb-o"></i></a> <a href="#"><i class="fa fa-comment"></i></a><select> <option>Select Category</option></select><select><option>Select Process</option></select> </div>');
}

function NewThread(e){
    $('<label><strong><input type="checkbox" onclick="ShowThread(this)">Thread '+thread_count+'</strong><div class="threads"><div class="sub_thread"> <div class="thread_s1 flex"> <section class="flex-content"><h6>Sub Thread</h6><textarea placeholder="Enter Text Here"></textarea></section><section class="flex-content"><h6>Sub Interpretation</h6><textarea placeholder="Enter Text Here"></textarea></section></div> <div class="thread_s2 flex"><a href="#"><i class="fa fa-lightbulb-o"></i></a> <a href="#"><i class="fa fa-comment"></i></a><select> <option>Select Category</option></select><select><option>Select Process</option></select> </div> </div><div class="thread_s3 flex"><button class="btn btn1" onclick="SubThread(this)"><i class="fa fa-plus"></i> Sub thread</button></div><div class="thread_s1 sub_thread_s1 flex"> <section class="flex-content"><h6>Summary for thread '+thread_count+'</h6><textarea placeholder="Enter Text Here"></textarea> </section></div> <div class="thread_s2 sub_thread_s2 flex"><a href="#">Thread credit <i class="fa fa-pencil"></i></a> <select><option>Select Emotion</option> </select></div> </div> </label>').insertBefore(e).prev();
    thread_count++;
}

function AddExample(e){
        $(e).parent().prev().append('<section class="flex-content"><h6>Example</h6><textarea placeholder="Enter Text Here"></textarea></section>');
}

function NewExample(e){
    $('<label><strong><input type="checkbox" onclick="ShowThread(this)">Thread '+thread_count_2+'</strong><div class="threads"><div class="sub_thread"> <div class="thread_s1 flex"> <section class="flex-content"> <h6>Example</h6> <textarea placeholder="Enter Text Here"></textarea> </section></div> <div class="thread_s3 flex"> <button class="btn btn1" onclick="AddExample(this)"><i class="fa fa-plus"></i> Example</button> </div> </div><div class="thread_s1 sub_thread_s1 flex"> <section class="flex-content"> <h6>Argument for thread' +thread_count_2+'</h6> <textarea placeholder="Enter Text Here"></textarea></section> </div> </div> </label>').insertBefore(e).prev();
    thread_count_2++;
}
