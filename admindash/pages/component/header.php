<nav class="navbar container-fluid navbar-light bg-white position-sticky top-0">
    <div class=""><i class="fal fa-caret-circle-down h5 d-none d-md-block menutoggle fa-rotate-90"></i>
        <i class="fas fa-bars h4  d-md-none"></i></div>
    <div class="d-flex align-items-center gap-4">
        <form id="searchForm" class="d-flex align-items-center">
          
        </form>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the search form and input field
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');

        // Add event listener to the form submission
        searchForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            const searchQuery = searchInput.value.trim(); // Get the search query
            if (searchQuery !== '') {
                // Perform search action here, for example, redirect to search results page
                window.location.href = 'search_results.php?q=' + encodeURIComponent(searchQuery);
            }
        });
    });
</script>
