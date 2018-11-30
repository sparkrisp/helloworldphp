<?php
  $data = array();
  $data["nombre"] = "JORGE SANTOS";
  $data["cuit"] = "20888888880";
  $data["deuda_total"] = "5345,66";
  echo json_encode($data, JSON_PRETTY_PRINT);

  ?>