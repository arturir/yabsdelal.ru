'use strict';
import { readFile } from 'fs/promises';
const json = JSON.parse(
  await readFile(
    new URL('../db.json', import.meta.url)
  )
);
//  console.log(json);
import apiquick from 'api-quick';
apiquick.init(8080,{
  'ssl': {
    'key': '../key.pem',
    'cert': '../cert.pem'
}
});
var endpoints = {};
endpoints.repair = function() {
  return {json};
};
apiquick.addEndpoints(endpoints);

