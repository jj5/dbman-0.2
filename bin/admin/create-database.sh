#!/bin/bash

main() {

  set -euo pipefail;

  cd "$(dirname "$0")/../../";

  php bin/admin/libexec/create-database.php "$@";

}

main "$@";
