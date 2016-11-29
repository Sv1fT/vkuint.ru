<?php

$title = 'Студ.газета "Антарес"';
$style = '<link href="css/style/activities.css" rel="stylesheet" />';

echo '<title>'.$title.'</title>';
echo '<head>'.$style.'</head>';

?>



<article>
	<div class="container">
		<div class="bookmark">
			<h2><i class="fa fa-info-circle" aria-hidden="true"></i> Студ.газета "Антарес"</h2>
		</div>
		
		
		
		<div class="row">
		    <div class="col-md-12">
		        <p class="text-center" id="bottom"><button class="btn btn-primary" id="bottom2" data-toggle="modal" data-target=".bs-example-modal-lg">Заказать газету "Антарес"</button></p>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      
                      <div class="mail">
                      <form class="form-horizontal" role="form" method="POST" action="widget/mail/mail.php">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">ФИО</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Фамилия Имя Отчество" required name="H">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Ваш Email" name="A">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Телефон:</label>
                            <div class="col-sm-10">
                              <input type="tel" class="form-control" id="inputPassword3" placeholder="Ваш Телефон" required name="B">
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Курс:</label>
                            <div class="col-sm-10">
                              <select class="form-control" required name="C">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Группа:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Ваша Группа" required name="D">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Номер Выпуска</label>
                            <div class="col-sm-10">
                              <select class="form-control" required name="E">
                                  <option>Март-Апрель 2016г.</option>
                                  <option>Январь-Февраль 2016г.</option>
                                  <option>Спец. выпуск январь 2016г.</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Кол-во:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3"  min="1" max="50" required name="F">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Распечатка:</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="G">
                                  <option>Черно-белая</option>
                                  <option>Цветная</option>
                                </select>
                            </div>
                          </div>
                        
                          <p class="text-right">С вами скоро свяжутся для уточнения информации.</p>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Заказать</button>
                            </div>
                          </div>
                      </form>
                      </div>
                                              
                      
                    </div>
                  </div>
                </div>
		    </div>
		</div>
		
		<div class="row">
		    <div class="col-md-8">
		        <table class="table">
                    <tr>
                      <td class="active text-center"><strong>Номер Газеты</strong></td>
                      <td class="active text-center"><strong>Смотреть</strong></td>
                      <td class="active text-center"><strong>Цена<br>(Печатном виде)</strong></td>
                    </tr>
                    <tr>
                      <td class="success">Март-Апрель 2016г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEbS0zQlZXcEtFbDg" target="_blank">Смотреть</a></td>
                      <td class="danger">100 руб.</td>
                    </tr>
                     <tr>
                      <td class="success">Январь-Февраль 2016г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEMkY5VDdLN19BWlk" target="_blank">Смотреть</a></td>
                      <td class="danger">68 руб.</td>
                    </tr>
                    <tr>
                      <td class="success">Спец. выпуск январь 2016г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEd3hqUzlSQ0czR3c" target="_blank">Смотреть</a></td>
                      <td class="danger">68 руб.</td>
                    </tr>
                     <tr>
                      <td class="success">Декабрь 2015г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEb2F5Rkt4dFBxZ0U" target="_blank">Смотреть</a></td>
                      <td class="danger">50 руб.</td>
                    </tr>
                    <tr>
                      <td class="success">Ноябрь 2015г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEUlltUk5MeUxuZzQ" target="_blank">Смотреть</a></td>
                      <td class="danger">50 руб.</td>
                    </tr>
                     <tr>
                      <td class="success">Декабрь 2014г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEdTlqYlIwSFdWYUU" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Сентябрь-Октябрь 2014г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEUFNFVzF5V1hQMGs" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Май 2014г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEcUhJQnpQdTZQTkE" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Март 2014г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEdXVhdWZSNlJBRG8" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Январь - Февраль 2014г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEajEtODY1N0lCY2c" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Октябрь - Ноябрь 2013г.</td>
                      <td class="warning"><a href="documents/newspaper/25.pdf" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Апрель - Май 2013г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEdW95cjNoTjB4aEE" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Март 2013г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEZ0hldndZSEs5bFk" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Январь - Февраль 2013г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEeXVaZHJ5RC1pck0" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                      <tr>
                      <td class="success">Октябрь 2012г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEcGppemhkMU1GMlE" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Сентябрь-Октябрь 2012г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEbjhFUlBXYWNPNTg" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Спец. выпуск ноябрь 2011г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEbjhFUlBXYWNPNTg" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Октябрь 2011г.</td> 
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeENzFOUXk2MTl4QzA" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Сентябрь 2011г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEYWJLblhnWHBmcW8" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Март - апрель 2011г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEU2txS2kzSnNuVjQ" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Февраль 2011г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeERWFfM0x6VmNjSWs" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Спец. выпуск ноябрь 2010г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEWFM3VUZWVl81a1k" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Ноябрь 2010г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEMlVPb0NHR3l2dk0" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Спец. выпуск 2010г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEVEFwTE9NWDQ4THc" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Сентябрь 2010г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEMHFyNGZGYS12MTA" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Март 2010г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEdkxRaTBkQ2c5Nms" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Декабрь 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEdDRJWEtlVUlnN2c" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Спец. выпуск 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEWEh0WXczZG9fVzQ" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                     <tr>
                      <td class="success">Ноябрь 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEU2lHOGVlSU12TEU" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Сентябрь 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEWUZ2eXA0cUF4aDg" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Апрель 2009г./td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEYTQ5dmNjemhILUE" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Март 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEMGh6Z3JzYTdjV0U" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Февраль 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEMkMxb2ttdDV1M1E" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Январь 2009г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeEcEpjN3BSQU00a0k" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                    <tr>
                      <td class="success">Декабрь 2008г.</td>
                      <td class="warning"><a href="https://drive.google.com/open?id=0B0ssCbYYfjeENzVjNk4zWV9aanc" target="_blank">Смотреть</a></td>
                      <td class="danger">-</td>
                    </tr>
                </table>
		    </div>
		     <div class="col-md-4">
		        <div>
		            <img src="images/newspaper/1.jpg" width="100%" alt="Диплом" />
		            <img src="images/newspaper/2.jpg" width="100%" alt="Диплом" />
		        </div>
		    </div>
		</div>
		
		
		
		
		
	</div>
</article>