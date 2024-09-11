<html>
<head>
    <title>Simple jQuery Accordion</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .accordion {
            width: 50%;
            margin: 20px auto;
        }
        .accordion-header {
            background-color: #f4f4f4;
            padding: 10px;
            cursor: pointer;
            border: 1px solid #ddd;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .accordion-content {
            display: none;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="accordion">
    <div class="accordion-header">War and Peace by Leo Tolstoy</div>
    <div class="accordion-content">Book Price: $25</div>
    <div class="accordion-header">The Great Gatsby by F. Scott Fitzgerald</div>
    <div class="accordion-content">Book Price: $20</div>
    <div class="accordion-header">Adventures of Huckleberry Finn by Mark Twain</div>
    <div class="accordion-content">Book Price: $30</div>
    <div class="accordion-header">Madame Bovary by Gustave Flaubert</div>
    <div class="accordion-content">Book Price: $40</div>
    <div class="accordion-header">Anna Karenina by Leo Tolstoy</div>
    <div class="accordion-content">Book Price: $35</div>
</div>


<script>
$(document).ready(function() {
    $(".accordion-header").click(function() {
        var content = $(this).next(".accordion-content");
        $(".accordion-content").not(content).slideUp(); // Hide other content
        content.slideToggle(); // Toggle current content
    });
});
</script>

</body>
</html>
