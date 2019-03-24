<div class="project_adder_form_container">
  <form class="project_adder_form" action="/dashboard/assets/script/project_adder.script.php" method="post">
    <input class="project_adder_form_input" type="text" name="project_name" placeholder="Name">
    <input class="project_adder_form_input" type="text" name="project_features" placeholder="Features">
    <input class="project_adder_form_input" type="text" name="project_description" placeholder="Description">
    <div class="project_lang_container">
      <div><input class="project_adder_form_checkbox" type="checkbox" name="project_lang">HTML</div>
      <div><input class="project_adder_form_checkbox" type="checkbox" name="project_lang">CSS</div>
      <div><input class="project_adder_form_checkbox" type="checkbox" name="project_lang">PHP</div>
      <div><input class="project_adder_form_checkbox" type="checkbox" name="project_lang">MySQL</div>
      <div><input class="project_adder_form_checkbox" type="checkbox" name="project_lang">JavaScript</div>
    </div>
    <input class="project_adder_form_input" type="text" name="project_git_link" placeholder="Github Link">
    <button class="project_adder_form_button" type="submit" name="project_add_button">Add Project</button>
  </form>

</div>
