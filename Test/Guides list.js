$("#myspan").click(function() {
    alert('I got a click');
});

$('a.remove').closest('span').click(function() {
    $('a.remove', this).trigger('click');
})