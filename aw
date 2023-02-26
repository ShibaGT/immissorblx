-- Gui to Lua
-- Version: 3.2

-- Instances:

local abilitywars = Instance.new("ScreenGui")
local ability = Instance.new("Frame")
local UICorner = Instance.new("UICorner")
local TextLabel = Instance.new("TextLabel")
local TextLabel_2 = Instance.new("TextLabel")
local expand = Instance.new("TextButton")
local UICorner_2 = Instance.new("UICorner")
local TextBox = Instance.new("TextBox")
local UICorner_3 = Instance.new("UICorner")
local cake = Instance.new("TextButton")
local UICorner_4 = Instance.new("UICorner")

--Properties:

abilitywars.Name = "abilitywars"
abilitywars.Parent = game.Players.LocalPlayer:WaitForChild("PlayerGui")
abilitywars.ZIndexBehavior = Enum.ZIndexBehavior.Sibling
abilitywars.ResetOnSpawn = false

ability.Name = "ability"
ability.Parent = abilitywars
ability.BackgroundColor3 = Color3.fromRGB(59, 59, 59)
ability.Position = UDim2.new(0.406552494, 0, 0.369030416, 0)
ability.Size = UDim2.new(0, 250, 0, 181)

UICorner.CornerRadius = UDim.new(0.100000001, 0)
UICorner.Parent = ability

TextLabel.Parent = ability
TextLabel.BackgroundColor3 = Color3.fromRGB(255, 255, 255)
TextLabel.BackgroundTransparency = 1.000
TextLabel.Position = UDim2.new(0.100000001, 0, 0, 0)
TextLabel.Size = UDim2.new(0, 200, 0, 50)
TextLabel.Font = Enum.Font.Arcade
TextLabel.Text = "ABILITY WARS"
TextLabel.TextColor3 = Color3.fromRGB(0, 0, 0)
TextLabel.TextScaled = true
TextLabel.TextSize = 14.000
TextLabel.TextWrapped = true

TextLabel_2.Parent = ability
TextLabel_2.BackgroundColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_2.BackgroundTransparency = 1.000
TextLabel_2.Position = UDim2.new(0.439999998, 0, 0.132596686, 0)
TextLabel_2.Size = UDim2.new(0, 115, 0, 32)
TextLabel_2.Font = Enum.Font.Arcade
TextLabel_2.Text = "by shibagt"
TextLabel_2.TextColor3 = Color3.fromRGB(0, 0, 0)
TextLabel_2.TextScaled = true
TextLabel_2.TextSize = 14.000
TextLabel_2.TextWrapped = true

expand.Name = "expand"
expand.Parent = ability
expand.BackgroundColor3 = Color3.fromRGB(36, 36, 36)
expand.Position = UDim2.new(0.236631587, 0, 0.276243091, 0)
expand.Size = UDim2.new(0, 173, 0, 48)
expand.Font = Enum.Font.Arcade
expand.Text = "Expand Hitbox"
expand.TextColor3 = Color3.fromRGB(0, 0, 0)
expand.TextScaled = true
expand.TextSize = 14.000
expand.TextWrapped = true

UICorner_2.CornerRadius = UDim.new(0.200000003, 0)
UICorner_2.Parent = expand

TextBox.Parent = ability
TextBox.BackgroundColor3 = Color3.fromRGB(36, 36, 36)
TextBox.Position = UDim2.new(0.0480000004, 0, 0.276243091, 0)
TextBox.Size = UDim2.new(0, 48, 0, 48)
TextBox.Font = Enum.Font.SourceSans
TextBox.Text = "5"
TextBox.TextColor3 = Color3.fromRGB(0, 0, 0)
TextBox.TextScaled = true
TextBox.TextSize = 14.000
TextBox.TextWrapped = true

UICorner_3.CornerRadius = UDim.new(0.200000003, 0)
UICorner_3.Parent = TextBox

cake.Name = "cake"
cake.Parent = ability
cake.BackgroundColor3 = Color3.fromRGB(36, 36, 36)
cake.Position = UDim2.new(0.0480000004, 0, 0.591160238, 0)
cake.Size = UDim2.new(0, 220, 0, 47)
cake.Font = Enum.Font.Arcade
cake.Text = "Get Cake"
cake.TextColor3 = Color3.fromRGB(0, 0, 0)
cake.TextScaled = true
cake.TextSize = 14.000
cake.TextWrapped = true

UICorner_4.CornerRadius = UDim.new(0.200000003, 0)
UICorner_4.Parent = cake

-- Scripts:

local function MFVOFOM_fake_script() -- expand.LocalScript 
	local script = Instance.new('LocalScript', expand)

	local player = game.Players.LocalPlayer
	
	script.Parent.MouseButton1Click:Connect(function()
		player.Character.Hitbox.Size = Vector3.new(tonumber(script.Parent.Parent.TextBox.Text),tonumber(script.Parent.Parent.TextBox.Text),tonumber(script.Parent.Parent.TextBox.Text))
	end)
end
coroutine.wrap(MFVOFOM_fake_script)()
local function ZYSUGZA_fake_script() -- ability.LocalScript 
	local script = Instance.new('LocalScript', ability)

	local UIS = game:GetService('UserInputService')
	local frame = script.Parent
	local dragToggle = nil
	local dragSpeed = 0.25
	local dragStart = nil
	local startPos = nil
	
	local function updateInput(input)
		local delta = input.Position - dragStart
		local position = UDim2.new(startPos.X.Scale, startPos.X.Offset + delta.X,
			startPos.Y.Scale, startPos.Y.Offset + delta.Y)
		game:GetService('TweenService'):Create(frame, TweenInfo.new(dragSpeed), {Position = position}):Play()
	end
	
	frame.InputBegan:Connect(function(input)
		if (input.UserInputType == Enum.UserInputType.MouseButton1 or input.UserInputType == Enum.UserInputType.Touch) then 
			dragToggle = true
			dragStart = input.Position
			startPos = frame.Position
			input.Changed:Connect(function()
				if input.UserInputState == Enum.UserInputState.End then
					dragToggle = false
				end
			end)
		end
	end)
	
	UIS.InputChanged:Connect(function(input)
		if input.UserInputType == Enum.UserInputType.MouseMovement or input.UserInputType == Enum.UserInputType.Touch then
			if dragToggle then
				updateInput(input)
			end
		end
	end)
end
coroutine.wrap(ZYSUGZA_fake_script)()
local function RXJTES_fake_script() -- cake.LocalScript 
	local script = Instance.new('LocalScript', cake)

	local player = game.Players.LocalPlayer
	local currentpos
	
	script.Parent.MouseButton1Click:Connect(function()
		local HRP = player.Character.HumanoidRootPart
		currentpos = HRP.Position
		HRP.Position = Vector3.new(145.381, 268.16, 29.3812)
		wait(1)
		HRP.Position = Vector3.new(currentpos)
	end)
end
coroutine.wrap(RXJTES_fake_script)()
