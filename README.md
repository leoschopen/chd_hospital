# 医院管理系统

本项目是一款基于PHP+MySQL+Apache+Bootstrap的医院管理系统，旨在为医院提供一个高效、安全、便捷的管理平台，包括医院信息管理、患者管理、医生管理、科室管理、药品管理、病历管理等多个模块。通过该系统，医院可以实现对患者、医生、药品等信息的统一管理和查询，提高工作效率和服务质量。

## 主要功能

- 医院信息管理：包括医院基本信息、科室信息、医生信息等的管理和查询。
- 患者管理：包括患者信息、病历信息等的管理和查询。
- 医生管理：包括医生信息、排班信息等的管理和查询。
- 科室管理：包括科室信息、科室排班信息等的管理和查询。
- 药品管理：包括药品信息、库存信息等的管理和查询。
- 病历管理：包括患者病历、检查报告、诊断记录等的管理和查询。

## 技术栈

- 前端：Bootstrap、jQuery、Ajax
- 后端：PHP、MySQL
- 服务器：Apache

## 系统架构



系统采用MVC架构，前端使用Bootstrap框架进行开发，后端使用PHP语言和MySQL数据库进行开发和存储。服务器采用Apache进行部署和管理。系统通过Ajax技术实现前后端的数据交互和页面动态更新。

## 数据库设计

本系统采用关系型数据库MySQL进行存储，共设计了10张表，分别为：

- hospital：医院信息表，包括医院编号、医院名称、医院地址等字段。
- department：科室信息表，包括科室编号、科室名称、科室简介等字段。
- doctor：医生信息表，包括医生编号、医生姓名、医生性别等字段。
- schedule：排班信息表，包括排班编号、医生编号、科室编号等字段。
- patient：患者信息表，包括患者编号、患者姓名、患者性别等字段。
- medical_record：病历信息表，包括病历编号、患者编号、医生编号等字段。
- diagnosis：诊断记录表，包括诊断编号、病历编号、诊断结果等字段。
- prescription：处方表，包括处方编号、病历编号、药品编号、数量等字段。
- medicine：药品信息表，包括药品编号、药品名称、药品单价等字段。
- stock：药品库存表，包括药品编号、库存数量等字段。

## 安装部署

- 环境要求：PHP5.6+、MySQL5.7+、Apache2.4+
- 下载代码：`git clone https://github.com/your_username/your_repository.git`
- 导入数据库：将项目中的`hospital.sql`文件导入到MySQL数据库中
- 修改配置文件：将`config.php`中的数据库连接信息修改为实际的数据库连接信息
- 部署项目：将项目文件放置到Apache的网站目录中，访问`http://localhost/your_project`即可
