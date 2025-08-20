<?php
if (session_id() == '') {
  session_start();
}
if (isset($_SESSION['adminid'])) {
  if (file_exists('systemconfig.php')) {
    include_once('systemconfig.php');
  }
  if (file_exists('includes/systemconfig.php')) {
    include_once('includes/systemconfig.php');
  }
  if (file_exists('../includes/systemconfig.php')) {
    include_once('../includes/systemconfig.php');
  }
} else {
  header('location: ./');
  exit(0);
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Book MS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style2.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <script>
    function ajax_fn(url, elementId) {
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById(elementId).innerHTML = "";
          document.getElementById(elementId).innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }


    function add_author() {
      var author_name = document.getElementById('author_name').value.trim();
      var details = document.getElementById('details').value.trim();

      // Simple required check (kept minimal as requested)
      if (!author_name) {
        alert("Please enter an Author Name.");
        return;
      }

      let myForm = new FormData();
      myForm.append('author_name', author_name);
      myForm.append('details', details);
      myForm.append('add', 1);

      if (confirm("Are you sure you want to add this Author?")) {
        $.ajax({
          url: 'pages/author.php', // make sure this path matches your file location
          type: "POST",
          data: myForm,
          contentType: false,
          processData: false,
          success: function(data) {
            $("#ultimate_content").html(data).css('opacity', '1');
            alert("Successfully processed request.");

            // Optional: clear inputs (only if the form stays on the page after reload)
            var a = document.getElementById('author_name');
            var d = document.getElementById('details');
            if (a) a.value = "";
            if (d) d.value = "";
          },
          error: function() {
            alert("Error processing request.");
          }
        });
      } else {
        alert("Operation cancelled.");
      }
    }

    function delete_author(authorid) {
      if (confirm("Are you sure you want to delete this Author?")) {
        let myForm = new FormData();
        myForm.append('authorid', authorid);
        myForm.append('delete', 1);

        $.ajax({
          url: 'pages/author.php',
          type: "POST",
          data: myForm,
          contentType: false,
          processData: false,
          success: function(data) {
            $("#ultimate_content").html(data).css('opacity', '1');
            alert("Author deleted successfully.");
          },
          error: function() {
            alert("Error processing request.");
          }
        });
      }
    }

    function update_author(authorid) {
      var newName = prompt("Enter new Author Name:");
      if (!newName) return;

      var newDetails = prompt("Enter new Details:");
      if (newDetails === null) newDetails = "";

      let myForm = new FormData();
      myForm.append('authorid', authorid);
      myForm.append('author_name', newName);
      myForm.append('details', newDetails);
      myForm.append('update', 1);

      if (confirm("Are you sure you want to update this Author?")) {
        $.ajax({
          url: 'pages/author.php',
          type: "POST",
          data: myForm,
          contentType: false,
          processData: false,
          success: function(data) {
            $("#ultimate_content").html(data).css('opacity', '1');
            alert("Author updated successfully.");
          },
          error: function() {
            alert("Error processing request.");
          }
        });
      }
    }


    function add_category() {
      var name = (document.getElementById('category_name')?.value || '').trim();
      if (!name) {
        alert('Please enter a Category name.');
        return;
      }

      if (!confirm('Add this category?')) return;

      var form = new FormData();
      form.append('add_cat', 1);
      form.append('name', name);

      $.ajax({
        url: 'pages/category.php', // adjust path to this file
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Category added.');
        },
        error: function() {
          alert('Error adding category.');
        }
      });
    }

    function delete_category(catid) {
      if (!catid) return;
      if (!confirm('Delete this category?')) return;

      var form = new FormData();
      form.append('delete_cat', 1);
      form.append('catid', catid);

      $.ajax({
        url: 'pages/category.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Category deleted.');
        },
        error: function() {
          alert('Error deleting category.');
        }
      });
    }

    function update_category(catid) {
      if (!catid) return;

      // Read current value from the row
      var row = document.querySelector('tr[data-cat-id="' + catid + '"]');
      var currentName = row ? (row.querySelector('.cell-name')?.textContent || '').trim() : '';

      var newName = prompt('Update Category Name:', currentName);
      if (newName === null) return; // cancelled
      newName = newName.trim();
      if (!newName) {
        alert('Category name cannot be empty.');
        return;
      }

      var form = new FormData();
      form.append('update_cat', 1);
      form.append('catid', catid);
      form.append('name', newName);

      $.ajax({
        url: 'pages/category.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Category updated.');
        },
        error: function() {
          alert('Error updating category.');
        }
      });
    }




    function add_genre() {
      var name = (document.getElementById('genre_name')?.value || '').trim();
      var catid = document.getElementById('catid')?.value || '0';

      if (!name) {
        alert('Please enter a Genre name.');
        return;
      }
      if (catid === '0') {
        alert('Please select a Category.');
        return;
      }
      if (!confirm('Add this genre?')) return;

      var form = new FormData();
      form.append('add_genre', 1);
      form.append('name', name);
      form.append('category_id', catid);

      $.ajax({
        url: 'pages/genre.php', // adjust to where this PHP lives
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Genre added.');
        },
        error: function() {
          alert('Error adding genre.');
        }
      });
    }

    function delete_genre(genreid) {
      if (!genreid) return;
      if (!confirm('Delete this genre?')) return;

      var form = new FormData();
      form.append('delete_genre', 1);
      form.append('genreid', genreid);

      $.ajax({
        url: 'pages/genre.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Genre deleted.');
        },
        error: function() {
          alert('Error deleting genre.');
        }
      });
    }

    function update_genre(genreid) {
      var name = (document.getElementById('genre_name')?.value || '').trim();
      var catid = document.getElementById('catid')?.value || '0';

      if (!name) {
        alert('Please enter a Genre name.');
        return;
      }
      if (catid === '0') {
        alert('Please select a Category.');
        return;
      }
      if (!confirm('Update this genre?')) return;

      var form = new FormData();
      form.append('name', name);
      form.append('category_id', catid);
      form.append('update_genre', genreid);

      $.ajax({
        url: 'pages/genre.php', // adjust to where this PHP lives
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Genre updated.');
        },
        error: function() {
          alert('Error adding genre.');
        }
      });
    }



    function param(w, h) {
      var width = w;
      var height = h;
      var left = (screen.width - width) / 2;
      var top = (screen.height - height) / 2;
      var params = 'width=' + width + ', height=' + height;
      params += ', top=' + top + ', left=' + left;
      params += ', directories=no';
      params += ', location=no';
      params += ', resizable=no';
      params += ', status=no';
      params += ', toolbar=no';
      return params;
    }

    function openWin(url) {
      myWindow = window.open(url, 'mywin', param(800, 500));
      myWindow.focus();
    }

    function openCustom(url, w, h) {
      myWindow = window.open(url, 'mywin', param(w, h));
      myWindow.focus();
    }




    function add_book() {
      var title = (document.getElementById('title')?.value || '').trim();
      var genreid = document.getElementById('genreid')?.value || '0';
      var authorid = document.getElementById('authorid')?.value || '0';
      var description = (document.getElementById('description')?.value || '').trim(); // FIXED id
      var published_date = document.getElementById('published_date')?.value || ''; // yyyy-mm-dd
      var publisher = (document.getElementById('publisher')?.value || '').trim();
      var rating = (document.getElementById('rating')?.value || '').trim();
      var review_count = (document.getElementById('review_count')?.value || '').trim();
      var pages = (document.getElementById('pages')?.value || '').trim();

      if (!title) {
        alert('Please enter a Title.');
        return;
      }
      if (genreid === '0') {
        alert('Please select a Genre.');
        return;
      }

      // optional validations (kept minimal)
      if (rating !== '') {
        var r = parseFloat(rating);
        // DECIMAL(2,1) means up to 9.9 (single digit before decimal)
        if (isNaN(r) || r < 0 || r > 9.9) {
          alert('Rating must be between 0.0 and 9.9');
          return;
        }
        rating = r.toFixed(1);
      }
      if (review_count !== '') {
        var rc = parseInt(review_count, 10);
        if (isNaN(rc) || rc < 0) {
          alert('Review Count must be a non-negative integer.');
          return;
        }
        review_count = String(rc);
      }
      if (pages !== '') {
        var p = parseInt(pages, 10);
        if (isNaN(p) || p <= 0) {
          alert('Pages must be a positive integer.');
          return;
        }
        pages = String(p);
      }

      if (!confirm('Add this book?')) return;

      var form = new FormData();
      form.append('add_book', 1);
      form.append('title', title);
      form.append('genreid', genreid);
      form.append('authorid', authorid);
      form.append('description', description);
      form.append('published_date', published_date);
      form.append('publisher', publisher);
      form.append('rating', rating);
      form.append('review_count', review_count);
      form.append('pages', pages);

      $.ajax({
        url: 'pages/book.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Book added.');
        },
        error: function() {
          alert('Error adding book.');
        }
      });
    }

    function update_book(bookid) {
      if (!bookid) return;

      var title = (document.getElementById('title')?.value || '').trim();
      var genreid = document.getElementById('genreid')?.value || '0';
      var authorid = document.getElementById('authorid')?.value || '0';
      // allow for old typo id="descrpition"
      var descInput = document.getElementById('description') || document.getElementById('descrpition');
      var description = (descInput?.value || '').trim();
      var published_date = document.getElementById('published_date')?.value || '';
      var publisher = (document.getElementById('publisher')?.value || '').trim();
      var rating = (document.getElementById('rating')?.value || '').trim();
      var review_count = (document.getElementById('review_count')?.value || '').trim();
      var pages = (document.getElementById('pages')?.value || '').trim();

      if (!title) {
        alert('Please enter a Title.');
        return;
      }
      if (genreid === '0') {
        alert('Please select a Genre.');
        return;
      }

      // minimal validations (same as add)
      if (rating !== '') {
        var r = parseFloat(rating);
        if (isNaN(r) || r < 0 || r > 9.9) {
          alert('Rating must be between 0.0 and 9.9');
          return;
        }
        rating = r.toFixed(1);
      }
      if (review_count !== '') {
        var rc = parseInt(review_count, 10);
        if (isNaN(rc) || rc < 0) {
          alert('Review Count must be a non-negative integer.');
          return;
        }
        review_count = String(rc);
      }
      if (pages !== '') {
        var p = parseInt(pages, 10);
        if (isNaN(p) || p <= 0) {
          alert('Pages must be a positive integer.');
          return;
        }
        pages = String(p);
      }

      if (!confirm('Save changes to this book?')) return;

      var form = new FormData();
      form.append('update_book', 1);
      form.append('bookid', bookid);
      form.append('title', title);
      form.append('genreid', genreid);
      form.append('authorid', authorid);
      form.append('description', description);
      form.append('published_date', published_date);
      form.append('publisher', publisher);
      form.append('rating', rating);
      form.append('review_count', review_count);
      form.append('pages', pages);

      $.ajax({
        url: 'pages/book.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Book updated.');
        },
        error: function() {
          alert('Error updating book.');
        }
      });
    }

    function delete_book(bookid) {
      if (!bookid) return;
      if (!confirm('Delete this book?')) return;

      var form = new FormData();
      form.append('delete_book', 1);
      form.append('bookid', bookid);

      $.ajax({
        url: 'pages/book.php',
        type: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function(html) {
          $("#ultimate_content").html(html).css('opacity', '1');
          alert('Book deleted.');
        },
        error: function() {
          alert('Error deleting book.');
        }
      });
    }
  </script>
  <script>
    function uploadBookImage(input) {
      const form = input.closest('form');
      const formData = new FormData(form);

      fetch('pages/book_upload.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          alert(result);
          ajax_fn('pages/book.php', 'ultimate_content');
        })
        .catch(error => {
          alert('Upload failed.');
          console.error(error);
        });
    }

    function uploadBookImageAuthor(input) {
      const formData = new FormData();
      formData.append("authorId", input.getAttribute("data-authorid"));
      formData.append("authorFile", input.files[0]);

      fetch('pages/author_upload.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          alert(result);
          ajax_fn('pages/author.php', 'ultimate_content');
        })
        .catch(error => {
          alert('Upload failed.');
          console.error(error);
        });
    }
  </script>
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="visibility:hidden; background-image: url(images/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <!-- <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Books</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="#">Genre</a>
              </li>
              <li>
                <a href="#">Home 2</a>
              </li>
              <li>
                <a href="#">Home 3</a>
              </li>
            </ul>
          </li> -->
          <li>
            <a onclick="ajax_fn('pages/author.php','ultimate_content');" href="javascript:void();">Author</a>
          </li>
          <li>
            <a onclick="ajax_fn('pages/category.php','ultimate_content');" href="javascript:void();">Category</a>
          </li>
          <li>
            <a onclick="ajax_fn('pages/genre.php','ultimate_content');" href="javascript:void();">Genre</a>
          <li>
            <a onclick="ajax_fn('pages/book.php','ultimate_content');" href="javascript:void();">Books</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="pages/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="ultimate_content">
        <h2 class="mb-4">Welcome Back Admin!</h2>
        <p>This is Book Management System.</p>
      </div>
    </div>
  </div>

  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>