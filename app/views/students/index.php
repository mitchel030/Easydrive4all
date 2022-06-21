<h1 class="text-center">My Driving Lessons</h1>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Driving Lesson ID</th>
            <th scope="col">Driving Lesson Date</th>
            <th scope="col">Instructor Name</th>
          </tr>
        </thead>
        <tbody>
        <?php echo $data["requestRows"]; ?>
        </tbody>
      </table>