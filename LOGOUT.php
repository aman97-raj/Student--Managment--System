<?php
session_start(); // Start the session
session_destroy(); // Destroy the session
header('Location: index.php'); // Redirect to login.php
exit(); // Make sure to exit after redirecting
?>
namespace webc12025
{
protected void page_load(object sender,Event Args e)
{
}
protected void Button1_click(object sender,Event Args)
{
genderId.Text="your gender is"+ <RadioButton1. Text 
else
gender Id.```php
<?php
session_start(); // Start the session
if (isset($_SESSION)) {
    session_destroy(); // Destroy the session
}
header('Location: index.php'); // Redirect to login.php
exit(); // Make sure to exit after redirecting
?>

namespace webc12025
{
    protected void page_load(object sender, EventArgs e)
    {
    }

    protected void Button1_click(object sender, EventArgs e)
    {
        if (RadioButton1.Checked)
        {
            genderId.Text = "Your gender is " + RadioButton1.Text;
        }
        else if (RadioButton2.Checked)
        {
            genderId.Text = "Your gender is " + RadioButton2.Text;
        }
    }
}
```<?php
// Start the session
session_start();
// Destroy the session
session_destroy();
// Log session destruction
error_log("Session destroyed.");
// Redirect to login.php
header('Location: index.php');
// Log redirect
error_log("Redirected to index.php.");
// Make sure to exit after redirecting
exit();
?>
namespace webc12025
{
    protected void page_load(object sender, EventArgs e)
    {
        // Log page load
        error_log("Page loaded.");
    }
    protected void Button1_click(object sender, EventArgs e)
    {
        // Log button click
        error_log("Button1 clicked.");
        if (RadioButton1.Checked)
        {
            // Log radio button selection
            error_log("RadioButton1 selected.");
            genderId.Text = "Your gender is " + RadioButton1.Text;
        }
        else
        {
            // Log radio button selection
            error_log("RadioButton2 selected.");
            genderId.Text = "Your gender is " + RadioButton2.Text;
        }
    }
}text= your gender is" + RadioButton2 +text;
}
}
select courses
Next page
