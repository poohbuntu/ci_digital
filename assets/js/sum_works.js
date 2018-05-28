function sum_pages()
{
  var pages = document.form_work_add['pages'].value;
  var type_page = document.form_work_add['type_page'].value;
  var number_of_sheets = document.form_work_add['number_of_sheets'].value;
  var sum  = 0;

  sum = Math.ceil(pages/type_page)*number_of_sheets;
  document.form_work_add.total_pages.value = sum;
}

function sum_papers()
{
  var number_of_sheets = document.form_work_add['number_of_sheets'].value;
  var number_of_sets = document.form_work_add['number_of_sets'].value;
  var sum  = 0;

  sum = parseFloat(number_of_sheets*number_of_sets);
  document.form_work_add.total_papers.value = sum;
}
