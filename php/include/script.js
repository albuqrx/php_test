$(document).ready(function() {
    // Hide row button click
    $(".hideButton").click(function () {
        $(this).closest("tr").hide();
        $.ajax({
            url: "/include/hiderow.php",
            method: 'post',
            data: {id: $(this).attr("id"), active: false},
        });
    });

    $(".visibleButton").click(function(){
        $.ajax({
            url: "/include/visibleall.php",
        });
        window.location.reload();
    });

    $(".plusButton").click(function () {
        var count = +$(this).parent().children('span').text()
        $(this).parent().children('span').text(++count);

        $.ajax({
            url: "/include/changeQuantity.php",
            method: 'post',
            dataType: 'json',
            data: {id: $(this).attr("id"), count: count},
            success: function(data)
            {
                alert(data.id + " " + data.count)
            }
        });
    });

    $(".minusButton").click(function () {
        var count = +$(this).parent().children('span').text()
        if (count > 0) {
            $(this).parent().children('span').text(--count);
            $.ajax({
                url: "/include/changeQuantity.php",
                method: 'post',
                dataType: 'json',
                data: {id: $(this).attr("id"), count: count},
                // success: function(data)
                // {
                //     alert(data.id + " " + data.count)
                // }
            });
        }
        else {
            alert("Не может быть меньше нуля!");
        }
    });
});