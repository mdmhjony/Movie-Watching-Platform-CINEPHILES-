<!-- include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<form>
  <input type="text" id="search-input" name="searchbox" placeholder="Search">
  <button type="submit">Search</button>
</form>
<div id="search-results"></div>

<script>
  $(function() {
    var searchInput = $('#search-input');
    var searchResults = $('#search-results');
    searchInput.on('input', function() {
      var query = searchInput.val();
      if (query.length >= 3) {
        alert('Search query: ' + query);
      } else {
        searchResults.empty();
      }
    });
  });
</script>
