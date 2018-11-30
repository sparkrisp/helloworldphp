<?php
  $data = array();
  $data["nombre"] = "JORGE SANTOS";
  $data["cuit"] = "20222222220";
  $data["deuda_total"] = "5345,66";
  echo json_encode($data, JSON_PRETTY_PRINT);

  ?>