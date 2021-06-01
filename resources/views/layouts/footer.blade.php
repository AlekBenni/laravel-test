<footer class="container">

    <ul class="list-inline">
        @foreach($rubrics as $rubric)
            <li class="list-inline-item"><a class="text-dark text-decoration-none" href="#">{{ $rubric->title }}</a></li>
        @endforeach
    </ul>

    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>


