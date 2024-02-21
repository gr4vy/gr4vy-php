rm -rf lib/api lib/model
docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli:v6.0.0 generate \
  -i https://gr4vy.github.io/gr4vy-openapi/openapi.sdks.v1.json \
  -g php \
  --git-user-id gr4vy \
  --git-repo-id gr4vy-php \
  --enable-post-process-file \
  -o /local \
  -c /local/.openapi-generator-config.json

sh ./.openapi-generator/replace.sh