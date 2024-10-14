<script>
    // Toggle the dropdown menu
    document.getElementById("dropdownButton").addEventListener("click", function() {
        const dropdownList = document.getElementById("dropdownList");
        dropdownList.classList.toggle("hidden");
    });

    // Update selected option and close the menu
    document.querySelectorAll("#dropdownList li").forEach(function(item) {
        item.addEventListener("click", function() {
            // Update the button's label with the selected option
            document.getElementById("selectedOption").textContent = item.textContent;

            // Remove 'selected' class from all options and add it to the clicked one
            document.querySelectorAll("#dropdownList li").forEach(li => li.classList.remove("selected"));
            item.classList.add("selected");

            // Close the dropdown
            document.getElementById("dropdownList").classList.add("hidden");
        });
    });

</script>