# Runbook — Deploy

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Publicar uma nova versão do Mapas Natal em ambiente de homologação ou produção.

## Pré-condições

- [ ] A versão está tagueada seguindo Versionamento Semântico.
- [ ] O certificado SSL está presente em `./Certificado/` (produção).
- [ ] O arquivo `.env` está configurado no host de destino.
- [ ] Backup do banco e dos arquivos persistentes foi realizado.

## Procedimento

1. Acesse o host de destino.
2. Atualize o repositório para a tag desejada: `git checkout <tag>`.
3. Atualize os submódulos: `git submodule update --init --recursive`.
4. Reconstrua a imagem: `docker compose build`.
5. Reinicie os serviços: `docker compose up -d`.
6. Verifique se a aplicação responde corretamente em HTTPS.

## Rollback deste runbook

Se algo falhar, execute o runbook `rollback.md` revertendo para a tag anterior.
