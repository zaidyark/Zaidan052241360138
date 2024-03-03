<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="top-header">
        
    </div>
<h1>PAYMENT</h1>
    <main>
        <section>
            <div class="container">
                <form id="paymentForm" method="post">
                    <h1>Student Payment Form</h1>
                    <div class="form-group">
                        <label for="studentName">Student Name:</label>
                        <input type="text" id="studentName" name="StudentName" placeholder="Student Name" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student ID:</label>
                        <input type="text" id="studentID" name="StudentID" placeholder="Student ID" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student Contact:</label>
                        <input type="number" id="digitstudentID" name="StudentNumber" placeholder="Student Contact" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Student Email:</label>
                        <input type="email" class="email" name="StudentEmail" placeholder="Student Email" required>
                    </div>
                    <div class="form-group">
                        <label for="studentID">Programme:</label>
                        <input type="text" id="studentID" name="StudentProgram" placeholder="Programme" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="digit" id="amount" name="Amount" placeholder="Amount" required>
                    </div>
                    <div class="form-group">
                        <label for="paymentMethod">Payment Method:</label>
                        <select id="paymentMethod" name="PaymentMethod" required>
                            <option value="">Select Payment Method</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="momo">Momo</option>
                            <option value="Google">Google Pay</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit Payment" name="submit">
                        <input type="reset" class="reset" value="Reset Payment">
                    </div>

                </form>
            </div>
            
        </section>
        
    </main>
    <br><br><br><br><br><br><br><br><br>
    <footer>
        <p>&copy; 2023 Faculty Website</p>
    </footer>
</body>

</html>