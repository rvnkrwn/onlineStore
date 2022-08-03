#!/usr/bin/env node

var fs = require('fs'),
  path = require('path'),
  program = require('commander')
  css_prefix = require('css-prefix'),
  pkg = JSON.parse(fs.readFileSync(path.join(__dirname, 'package.json')))

program
  .version(pkg.version)
  .usage('somePrefix <file.css>')
  .parse(process.argv)

if (program.args.length < 2) {
  process.stderr.write(program.helpInformation())
  process.exit(1)
}

var prefix = program.args[0],
  src = fs.readFileSync(program.args[1], 'utf8'),
  css = css_prefix(prefix, src);

console.log(css);
process.exit();
