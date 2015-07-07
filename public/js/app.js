$(function(){})
.on('click', '.delete_driver', function(e){
    if (!confirm('Are you sure?')) {
        e.preventDefault();
    }
});