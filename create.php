$user = $pdo->prepare("INSERT INTO user (firstname, lastname) VALUES (:firstname, :lastname)");
            $user->execute(compact('firstname', 'lastname'));
            echo '<div class="alert alert-success" role="alert">New user created successfully</div>'; 
        }
        ?>
        <form action="create.php" method="post" class="mt-5 col-md-6 mx-auto"> 
           <div class="mb-3"> 
               <label class="form-label">First Name</label> 
               <input type="text" class="form-control" name="firstname" 
placeholder="Firstname"> 
           </div> 
           <div class="mb-3"> 
               <label class="form-label">Last Name</label> 
               <input type="text" class="form-control" name="lastname" 
placeholder="Lastname"> 
           </div> 
           <button type="submit" class="btn btn-primary">Create</button> 
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
 
</html>