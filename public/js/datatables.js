$(document).ready(function() {
    $('#myTable').DataTable( {
        // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        "scrollX": true,
        "language": {
            "search": "",
            "searchPlaceholder": "Search...",
            "decimal": ",",
            "thousands": "."
        }
    } );
    $(document).ready(function () {
        $('.dataTables_filter input[type="search"]').css( {
            "marginBottom": "10px"
        } );
    } );

} );

$(document).ready(function() {
    $('#myTable2').DataTable( {
        "lengthMenu": [5, 25, 50, "All"],
        "scrollX": true,
        "language": {
            "search": "",
            "searchPlaceholder": "Search...",
            "decimal": ",",
            "thousands": "."
        }
    } );
    $(document).ready(function () {
        $('.dataTables_filter input[type="search"]').css( {
            "marginBottom": "10px"
        } );
    } );

} );

