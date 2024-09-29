-- Gui to Lua
-- Version: 3.2

-- Instances:

local ABIL = Instance.new("ScreenGui")
local Main = Instance.new("ScrollingFrame")
local TextLabel = Instance.new("TextLabel")
local Buttons = Instance.new("Folder")
local KillAura = Instance.new("TextButton")
local UICorner = Instance.new("UICorner")
local ExtendHitbox = Instance.new("TextButton")
local UICorner_2 = Instance.new("UICorner")
local KillPlayer = Instance.new("TextButton")
local UICorner_3 = Instance.new("UICorner")
local TPToPlayer = Instance.new("TextButton")
local UICorner_4 = Instance.new("UICorner")
local TextBoxes = Instance.new("Folder")
local Size = Instance.new("TextBox")
local UICorner_5 = Instance.new("UICorner")
local Player = Instance.new("TextBox")
local UICorner_6 = Instance.new("UICorner")
local TPPlayer = Instance.new("TextBox")
local UICorner_7 = Instance.new("UICorner")
local Toggles = Instance.new("Folder")
local AntiFallBG = Instance.new("Frame")
local TextLabel_2 = Instance.new("TextLabel")
local AntiFallToggleBG = Instance.new("Frame")
local AntiFall = Instance.new("TextButton")
local UICorner_8 = Instance.new("UICorner")
local UICorner_9 = Instance.new("UICorner")
local UICorner_10 = Instance.new("UICorner")
local LowBG = Instance.new("Frame")
local TextLabel_3 = Instance.new("TextLabel")
local LowToggleBG = Instance.new("Frame")
local LowToggle = Instance.new("TextButton")
local UICorner_11 = Instance.new("UICorner")
local UICorner_12 = Instance.new("UICorner")
local UICorner_13 = Instance.new("UICorner")
local LoopKillMostBG = Instance.new("Frame")
local TextLabel_4 = Instance.new("TextLabel")
local LoopKillToggleBG = Instance.new("Frame")
local LoopKillMostToggle = Instance.new("TextButton")
local UICorner_14 = Instance.new("UICorner")
local UICorner_15 = Instance.new("UICorner")
local UICorner_16 = Instance.new("UICorner")
local TextLabel_5 = Instance.new("TextLabel")

--Properties:

ABIL.Name = "ABIL"
ABIL.Parent = game.Players.LocalPlayer:WaitForChild("PlayerGui")
ABIL.ZIndexBehavior = Enum.ZIndexBehavior.Sibling

Main.Name = "Main"
Main.Parent = ABIL
Main.Active = true
Main.BackgroundColor3 = Color3.fromRGB(36, 36, 36)
Main.BorderColor3 = Color3.fromRGB(0, 0, 0)
Main.BorderSizePixel = 0
Main.Position = UDim2.new(0, 75, 0.546999991, 0)
Main.Size = UDim2.new(0, 270, 0, 208)

TextLabel.Parent = Main
TextLabel.BackgroundColor3 = Color3.fromRGB(255, 255, 255)
TextLabel.BackgroundTransparency = 1.000
TextLabel.BorderColor3 = Color3.fromRGB(27, 42, 53)
TextLabel.Position = UDim2.new(0.129999995, 0, -0.0120000001, 40)
TextLabel.Size = UDim2.new(0, 200, 0, 50)
TextLabel.Font = Enum.Font.LuckiestGuy
TextLabel.Text = "ABILITY WARS"
TextLabel.TextColor3 = Color3.fromRGB(255, 255, 255)
TextLabel.TextScaled = true
TextLabel.TextSize = 14.000
TextLabel.TextWrapped = true

Buttons.Name = "Buttons"
Buttons.Parent = Main

KillAura.Name = "Kill Aura"
KillAura.Parent = Buttons
KillAura.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
KillAura.BorderSizePixel = 0
KillAura.Position = UDim2.new(0.129999995, 0, 0, 60)
KillAura.Size = UDim2.new(0, 200, 0, 43)
KillAura.Font = Enum.Font.SourceSansBold
KillAura.Text = "Kill Aura :  OFF"
KillAura.TextColor3 = Color3.fromRGB(255, 255, 255)
KillAura.TextScaled = true
KillAura.TextSize = 14.000
KillAura.TextWrapped = true

UICorner.CornerRadius = UDim.new(0.0500000007, 0)
UICorner.Parent = KillAura

ExtendHitbox.Name = "Extend Hitbox"
ExtendHitbox.Parent = Buttons
ExtendHitbox.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
ExtendHitbox.BorderSizePixel = 0
ExtendHitbox.Position = UDim2.new(0.129999995, 0, 0, 110)
ExtendHitbox.Size = UDim2.new(0, 96, 0, 43)
ExtendHitbox.Font = Enum.Font.SourceSansBold
ExtendHitbox.Text = "Extend Hitbox"
ExtendHitbox.TextColor3 = Color3.fromRGB(255, 255, 255)
ExtendHitbox.TextScaled = true
ExtendHitbox.TextSize = 14.000
ExtendHitbox.TextWrapped = true

UICorner_2.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_2.Parent = ExtendHitbox

KillPlayer.Name = "Kill Player"
KillPlayer.Parent = Buttons
KillPlayer.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
KillPlayer.BorderSizePixel = 0
KillPlayer.Position = UDim2.new(0.129999995, 0, 0, 160)
KillPlayer.Size = UDim2.new(0, 96, 0, 43)
KillPlayer.Font = Enum.Font.SourceSansBold
KillPlayer.Text = "Kill Player"
KillPlayer.TextColor3 = Color3.fromRGB(255, 255, 255)
KillPlayer.TextScaled = true
KillPlayer.TextSize = 14.000
KillPlayer.TextWrapped = true

UICorner_3.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_3.Parent = KillPlayer

TPToPlayer.Name = "TP To Player"
TPToPlayer.Parent = Buttons
TPToPlayer.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
TPToPlayer.BorderSizePixel = 0
TPToPlayer.Position = UDim2.new(0.129999995, 0, 0, 210)
TPToPlayer.Size = UDim2.new(0, 96, 0, 43)
TPToPlayer.Font = Enum.Font.SourceSansBold
TPToPlayer.Text = "TP To Player"
TPToPlayer.TextColor3 = Color3.fromRGB(255, 255, 255)
TPToPlayer.TextScaled = true
TPToPlayer.TextSize = 14.000
TPToPlayer.TextWrapped = true

UICorner_4.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_4.Parent = TPToPlayer

TextBoxes.Name = "TextBoxes"
TextBoxes.Parent = Main

Size.Name = "Size"
Size.Parent = TextBoxes
Size.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
Size.BorderColor3 = Color3.fromRGB(0, 0, 0)
Size.BorderSizePixel = 0
Size.Position = UDim2.new(0.514999986, 0, 0, 110)
Size.Size = UDim2.new(0, 96, 0, 43)
Size.Font = Enum.Font.SourceSansBold
Size.PlaceholderColor3 = Color3.fromRGB(255, 255, 255)
Size.Text = "size here (ex: 1)"
Size.TextColor3 = Color3.fromRGB(255, 255, 255)
Size.TextScaled = true
Size.TextSize = 14.000
Size.TextStrokeColor3 = Color3.fromRGB(255, 255, 255)
Size.TextWrapped = true

UICorner_5.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_5.Parent = Size

Player.Name = "Player"
Player.Parent = TextBoxes
Player.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
Player.BorderColor3 = Color3.fromRGB(0, 0, 0)
Player.BorderSizePixel = 0
Player.Position = UDim2.new(0.514999986, 0, 0, 160)
Player.Size = UDim2.new(0, 96, 0, 43)
Player.Font = Enum.Font.SourceSansBold
Player.PlaceholderColor3 = Color3.fromRGB(255, 255, 255)
Player.Text = "username here"
Player.TextColor3 = Color3.fromRGB(255, 255, 255)
Player.TextScaled = true
Player.TextSize = 14.000
Player.TextStrokeColor3 = Color3.fromRGB(255, 255, 255)
Player.TextWrapped = true

UICorner_6.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_6.Parent = Player

TPPlayer.Name = "TPPlayer"
TPPlayer.Parent = TextBoxes
TPPlayer.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
TPPlayer.BorderColor3 = Color3.fromRGB(0, 0, 0)
TPPlayer.BorderSizePixel = 0
TPPlayer.Position = UDim2.new(0.514999986, 0, 0, 210)
TPPlayer.Size = UDim2.new(0, 96, 0, 43)
TPPlayer.Font = Enum.Font.SourceSansBold
TPPlayer.PlaceholderColor3 = Color3.fromRGB(255, 255, 255)
TPPlayer.Text = "username here"
TPPlayer.TextColor3 = Color3.fromRGB(255, 255, 255)
TPPlayer.TextScaled = true
TPPlayer.TextSize = 14.000
TPPlayer.TextStrokeColor3 = Color3.fromRGB(255, 255, 255)
TPPlayer.TextWrapped = true

UICorner_7.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_7.Parent = TPPlayer

Toggles.Name = "Toggles"
Toggles.Parent = Main

AntiFallBG.Name = "AntiFallBG"
AntiFallBG.Parent = Toggles
AntiFallBG.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
AntiFallBG.BorderSizePixel = 0
AntiFallBG.Position = UDim2.new(0.129999995, 0, 0, 260)
AntiFallBG.Size = UDim2.new(0, 200, 0, 43)

TextLabel_2.Parent = AntiFallBG
TextLabel_2.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
TextLabel_2.BackgroundTransparency = 1.000
TextLabel_2.BorderColor3 = Color3.fromRGB(0, 0, 0)
TextLabel_2.BorderSizePixel = 0
TextLabel_2.Position = UDim2.new(0.215000302, 0, 0, 0)
TextLabel_2.Size = UDim2.new(0, 156, 0, 37)
TextLabel_2.Font = Enum.Font.SourceSansBold
TextLabel_2.Text = "Anti Fall"
TextLabel_2.TextColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_2.TextScaled = true
TextLabel_2.TextSize = 14.000
TextLabel_2.TextWrapped = true

AntiFallToggleBG.Name = "AntiFallToggleBG"
AntiFallToggleBG.Parent = AntiFallBG
AntiFallToggleBG.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
AntiFallToggleBG.BorderSizePixel = 0
AntiFallToggleBG.Position = UDim2.new(0, 5, 0, 5)
AntiFallToggleBG.Size = UDim2.new(0, 34, 0, 34)

AntiFall.Name = "Anti Fall"
AntiFall.Parent = AntiFallToggleBG
AntiFall.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
AntiFall.BorderSizePixel = 0
AntiFall.Position = UDim2.new(0.122657329, 0, 0.146814689, 0)
AntiFall.Size = UDim2.new(0, 24, 0, 24)
AntiFall.Font = Enum.Font.SourceSansBold
AntiFall.Text = ""
AntiFall.TextColor3 = Color3.fromRGB(255, 255, 255)
AntiFall.TextScaled = true
AntiFall.TextSize = 14.000
AntiFall.TextWrapped = true

UICorner_8.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_8.Parent = AntiFallToggleBG

UICorner_9.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_9.Parent = AntiFallToggleBG

UICorner_10.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_10.Parent = AntiFallBG

LowBG.Name = "LowBG"
LowBG.Parent = Toggles
LowBG.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
LowBG.BorderSizePixel = 0
LowBG.Position = UDim2.new(0.129999995, 0, 0, 310)
LowBG.Size = UDim2.new(0, 200, 0, 43)

TextLabel_3.Parent = LowBG
TextLabel_3.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
TextLabel_3.BackgroundTransparency = 1.000
TextLabel_3.BorderColor3 = Color3.fromRGB(0, 0, 0)
TextLabel_3.BorderSizePixel = 0
TextLabel_3.Position = UDim2.new(0.215000302, 0, 0, 0)
TextLabel_3.Size = UDim2.new(0, 156, 0, 37)
TextLabel_3.Font = Enum.Font.SourceSansBold
TextLabel_3.Text = "TP To Spawn When Low"
TextLabel_3.TextColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_3.TextScaled = true
TextLabel_3.TextSize = 14.000
TextLabel_3.TextWrapped = true

LowToggleBG.Name = "LowToggleBG"
LowToggleBG.Parent = LowBG
LowToggleBG.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
LowToggleBG.BorderSizePixel = 0
LowToggleBG.Position = UDim2.new(0, 5, 0, 5)
LowToggleBG.Size = UDim2.new(0, 34, 0, 34)

LowToggle.Name = "LowToggle"
LowToggle.Parent = LowToggleBG
LowToggle.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
LowToggle.BorderSizePixel = 0
LowToggle.Position = UDim2.new(0.122657329, 0, 0.146814689, 0)
LowToggle.Size = UDim2.new(0, 24, 0, 24)
LowToggle.Font = Enum.Font.SourceSansBold
LowToggle.Text = ""
LowToggle.TextColor3 = Color3.fromRGB(255, 255, 255)
LowToggle.TextScaled = true
LowToggle.TextSize = 14.000
LowToggle.TextWrapped = true

UICorner_11.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_11.Parent = LowToggle

UICorner_12.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_12.Parent = LowToggleBG

UICorner_13.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_13.Parent = LowBG

LoopKillMostBG.Name = "LoopKillMostBG"
LoopKillMostBG.Parent = Toggles
LoopKillMostBG.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
LoopKillMostBG.BorderSizePixel = 0
LoopKillMostBG.Position = UDim2.new(0.129999995, 0, 0, 360)
LoopKillMostBG.Size = UDim2.new(0, 200, 0, 43)

TextLabel_4.Parent = LoopKillMostBG
TextLabel_4.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
TextLabel_4.BackgroundTransparency = 1.000
TextLabel_4.BorderColor3 = Color3.fromRGB(0, 0, 0)
TextLabel_4.BorderSizePixel = 0
TextLabel_4.Position = UDim2.new(0.215000302, 0, 0, 0)
TextLabel_4.Size = UDim2.new(0, 156, 0, 37)
TextLabel_4.Font = Enum.Font.SourceSansBold
TextLabel_4.Text = "Loop Kill Most"
TextLabel_4.TextColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_4.TextScaled = true
TextLabel_4.TextSize = 14.000
TextLabel_4.TextWrapped = true

LoopKillToggleBG.Name = "LoopKillToggleBG"
LoopKillToggleBG.Parent = LoopKillMostBG
LoopKillToggleBG.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
LoopKillToggleBG.BorderSizePixel = 0
LoopKillToggleBG.Position = UDim2.new(0, 5, 0, 5)
LoopKillToggleBG.Size = UDim2.new(0, 34, 0, 34)

LoopKillMostToggle.Name = "LoopKillMostToggle"
LoopKillMostToggle.Parent = LoopKillToggleBG
LoopKillMostToggle.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
LoopKillMostToggle.BorderSizePixel = 0
LoopKillMostToggle.Position = UDim2.new(0.122657329, 0, 0.146814689, 0)
LoopKillMostToggle.Size = UDim2.new(0, 24, 0, 24)
LoopKillMostToggle.Font = Enum.Font.SourceSansBold
LoopKillMostToggle.Text = ""
LoopKillMostToggle.TextColor3 = Color3.fromRGB(255, 255, 255)
LoopKillMostToggle.TextScaled = true
LoopKillMostToggle.TextSize = 14.000
LoopKillMostToggle.TextWrapped = true

UICorner_14.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_14.Parent = LoopKillMostToggle

UICorner_15.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_15.Parent = LoopKillToggleBG

UICorner_16.CornerRadius = UDim.new(0.0500000007, 0)
UICorner_16.Parent = LoopKillMostBG

TextLabel_5.Parent = Main
TextLabel_5.BackgroundColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_5.BackgroundTransparency = 1.000
TextLabel_5.BorderColor3 = Color3.fromRGB(27, 42, 53)
TextLabel_5.Position = UDim2.new(0, -25, -0.0120000001, 30)
TextLabel_5.Size = UDim2.new(0, 100, 0, 25)
TextLabel_5.Font = Enum.Font.LuckiestGuy
TextLabel_5.Text = "V1.0"
TextLabel_5.TextColor3 = Color3.fromRGB(255, 255, 255)
TextLabel_5.TextScaled = true
TextLabel_5.TextSize = 14.000
TextLabel_5.TextWrapped = true

-- Scripts:

local function KIUMBJ_fake_script() -- Main.Drag 
	local script = Instance.new('LocalScript', Main)

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
coroutine.wrap(KIUMBJ_fake_script)()
local function GBEPYLW_fake_script() -- KillAura.LocalScript 
	local script = Instance.new('LocalScript', KillAura)

	local player = game.Players.LocalPlayer
	local mouse = player:GetMouse()
	local replicatedStorage = game:GetService("ReplicatedStorage")
	local remoteEvent = replicatedStorage:WaitForChild("Remote Events"):WaitForChild("Punch")
	
	local function createHitbox()
		if player.PlayerGui.ABIL.Main.Buttons["Kill Aura"].Text == "Kill Aura : ON" then
			player.PlayerGui.ABIL.Main.Buttons["Kill Aura"].Text = "Kill Aura : OFF"
			return
		else
			player.PlayerGui.ABIL.Main.Buttons["Kill Aura"].Text = "Kill Aura : ON"
			while(player.PlayerGui.ABIL.Main.Buttons["Kill Aura"].Text == "Kill Aura : ON") do
				local character = player.Character
				if not character then return end
	
				local hitboxSize = Vector3.new(1.5, 1.5, 2)
				local nearbyPlayers = {}
	
				-- Check for players within 5.5 studs
				for _, otherPlayer in pairs(game.Players:GetPlayers()) do
					if otherPlayer ~= player and otherPlayer.Character and otherPlayer.Character:FindFirstChild("HumanoidRootPart") then
						local distance = (character.HumanoidRootPart.Position - otherPlayer.Character.HumanoidRootPart.Position).Magnitude
						if distance <= 25.5 then
							table.insert(nearbyPlayers, otherPlayer)
						end
					end
				end
	
				if #nearbyPlayers > 0 then
					hitboxSize = Vector3.new(25.5, 25.5, 25.5)
	
					-- Get the first nearby player
					local targetPlayer = nearbyPlayers[1]
	
					-- Prepare the args for the remote event
					local args = {
						[1] = workspace:WaitForChild(targetPlayer.Name),  -- Reference the nearby player
						[2] = character.Hitbox.Position,                  -- Hitbox position
						[3] = 1.2616640329360962,                         -- Constant value
						[4] = targetPlayer.Character.HumanoidRootPart      -- Target player's HumanoidRootPart
					}
	
					-- Fire the remote event with the modified args
					remoteEvent:FireServer(unpack(args))
				end
	
				-- Create the Hitbox part
				character.Hitbox.Size = hitboxSize
				character.Hitbox.Transparency = 0.5
				wait(0)
			end
		end
	end
	
	-- Connect button click to createHitbox function
	script.Parent.MouseButton1Click:Connect(createHitbox)
end
coroutine.wrap(GBEPYLW_fake_script)()
local function KZAKBD_fake_script() -- ExtendHitbox.LocalScript 
	local script = Instance.new('LocalScript', ExtendHitbox)

	local Players = game:GetService("Players")
	local player = game.Players.LocalPlayer
	
	local isTeleporting = false
	local randomPlayer
	
	-- Function to teleport player behind a random player
	local function teleportBehindRandomPlayer()
		local character = player.Character
		if not character then return end
		
		character.Hitbox.Size = Vector3.new(player.PlayerGui.ABIL.Main.TextBoxes.Size.Text, player.PlayerGui.ABIL.Main.TextBoxes.Size.Text, player.PlayerGui.ABIL.Main.TextBoxes.Size.Text)
		character.Hitbox.Transparency = 0.5
	end
	
	script.Parent.MouseButton1Click:Connect(teleportBehindRandomPlayer)
end
coroutine.wrap(KZAKBD_fake_script)()
local function GVSBRZ_fake_script() -- KillPlayer.LocalScript 
	local script = Instance.new('LocalScript', KillPlayer)

	local player = game.Players.LocalPlayer
	local mouse = player:GetMouse()
	local replicatedStorage = game:GetService("ReplicatedStorage")
	local remoteEvent = replicatedStorage:WaitForChild("Remote Events"):WaitForChild("Punch")
	local originalPosition  -- Store original position
	
	local function createHitbox()
		local targetPlayerName = player.PlayerGui.ABIL.Main.TextBoxes.player.Text
		local targetPlayer = game.Players:FindFirstChild(targetPlayerName)
	
		if targetPlayer and targetPlayer.Character and targetPlayer.Character:FindFirstChild("Humanoid") then
			-- Store the original position
			originalPosition = player.Character.HumanoidRootPart.Position
	
			-- Teleport the local player's character to the target player
			local character = player.Character
			if not character then return end
	
			while targetPlayer.Character.Humanoid.Health > 0 do
				-- Set the local player's HumanoidRootPart 5 studs below their current position
	
	
				local args = {
					[1] = targetPlayer.Character,                            -- Reference the target player
					[2] = targetPlayer.Character.HumanoidRootPart.Position,  -- Use the target player's position
					[3] = 100,                               -- Constant value
					[4] = targetPlayer.Character.HumanoidRootPart           -- Target player's HumanoidRootPart
				}
	
				-- Fire the remote event with the modified args
				remoteEvent:FireServer(unpack(args))
	
				wait(0.5)  -- Wait a short time before checking again to avoid spamming
			end
	
			-- Reset the local player's position back to the original position
			character.HumanoidRootPart.Position = originalPosition
	
			print(targetPlayerName .. " is dead. Resetting position.")
		else
			warn("Player not found or is not alive.")
		end
	end
	
	
	-- Connect button click to createHitbox function
	script.Parent.MouseButton1Click:Connect(createHitbox)
end
coroutine.wrap(GVSBRZ_fake_script)()
local function HWUFBL_fake_script() -- TPToPlayer.LocalScript 
	local script = Instance.new('LocalScript', TPToPlayer)

	local player = game.Players.LocalPlayer
	local Players = game:GetService("Players")
	
	-- Function to teleport player to a specific part's CFrame
	local function teleportToPart(part)
		if part then
			local humanoidRootPart = player.Character:FindFirstChild("HumanoidRootPart")
			if humanoidRootPart then
				humanoidRootPart.CFrame = CFrame.lookAt(humanoidRootPart.Position, Vector3.new(part.Trashcan.Position.X, humanoidRootPart.Position.Y, part.Trashcan.Position.Z))
			end
			player.Character:SetPrimaryPartCFrame(part.Trashcan.CFrame)
		end
	end
	
	local function teleportToPlayer(targetPlayer)
		local targetCharacter = targetPlayer.Character
		if targetCharacter then
			local targetPart = targetCharacter.PrimaryPart
			if targetPart then
				player.Character:SetPrimaryPartCFrame(targetPart.CFrame)
			end
		end
	end
	
	-- Function to find and teleport to all trash can parts
	local function teleportToTrashCans()
		local trashFolder = game.Workspace.Map.Trash
		if trashFolder then
			for _, trashPart in pairs(trashFolder:GetChildren()) do
				if trashPart.Name == "Trashcan" then
					-- Teleport to the trash can's position
					teleportToPart(trashPart)
					wait(0.3)
					local args = {
						[1] = {
							["Goal"] = "LeftClick"
						}
					}
					game:GetService("Players").LocalPlayer.Character.Communicate:FireServer(unpack(args))
					local args1 = {
						[1] = {
							["Goal"] = "LeftClickRelease"
						}
					}
	
					game:GetService("Players").LocalPlayer.Character.Communicate:FireServer(unpack(args1))
	
					wait(1.5)
					local targetPlayer = Players:FindFirstChild(player.PlayerGui.TSB.Main.TextBoxes.TrashCanPlayer.Text)
					if targetPlayer then
						teleportToPlayer(targetPlayer)
					end
					wait(0.2)
					local args = {
						[1] = {
							["Goal"] = "LeftClick"
						}
					}
					game:GetService("Players").LocalPlayer.Character.Communicate:FireServer(unpack(args))
					local args1 = {
						[1] = {
							["Goal"] = "LeftClickRelease"
						}
					}
	
					game:GetService("Players").LocalPlayer.Character.Communicate:FireServer(unpack(args1))
					wait(1.5) -- Wait 0.2 seconds before grabbing the next trash can
				end
			end
		end
	end
	script.Parent.MouseButton1Click:Connect(teleportToTrashCans)
end
coroutine.wrap(HWUFBL_fake_script)()
local function DEAMSFD_fake_script() -- AntiFall.LocalScript 
	local script = Instance.new('LocalScript', AntiFall)

	
	local players = game:GetService("Players")
	local player = players.LocalPlayer
	local character = player.Character or player.CharacterAdded:Wait()
	local humanoid = character:WaitForChild("Humanoid")
	local toggle = player.PlayerGui.ABIL.Main.Toggles.AntiFallBG.AntiFallToggleBG["Anti Fall"]
	
	local zeroVelocity = Vector3.new(0,0,0)
	
	local function removeVelocity(character)
		local primaryPart = character.PrimaryPart
		primaryPart.AssemblyLinearVelocity = zeroVelocity
		--primaryPart.AssemblyAngularVelocity = zeroVelocity 
	end
	
	local function start()
		if player.Character["Left Leg"].Position.Y < -4 then
			local HumanoidRootPart = player.Character:FindFirstChild("HumanoidRootPart")
			if HumanoidRootPart then
				HumanoidRootPart.CFrame = CFrame.new(HumanoidRootPart.CFrame.X, HumanoidRootPart.CFrame.Y + 75, HumanoidRootPart.CFrame.Z)
				removeVelocity(character)
			end
		end
		wait()
	end
	
	script.Parent.MouseButton1Click:Connect(function()
		if toggle.BackgroundColor3 == Color3.fromRGB(39, 39, 39) then
			toggle.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
		else
			toggle.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
		end
	
		while (toggle.BackgroundColor3 == Color3.fromRGB(50, 50, 50)) do
			start()
		end
	
	end)
end
coroutine.wrap(DEAMSFD_fake_script)()
local function TOFY_fake_script() -- LowToggle.LocalScript 
	local script = Instance.new('LocalScript', LowToggle)

	local player = game.Players.LocalPlayer
	local toggle = player.PlayerGui.ABIL.Main.Toggles.LowBG.LowToggleBG.LowToggle
	
	
	script.Parent.MouseButton1Click:Connect(function()
		if toggle.BackgroundColor3 == Color3.fromRGB(39, 39, 39) then
			toggle.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
			while (toggle.BackgroundColor3 == Color3.fromRGB(50, 50, 50)) do
				if (player.Character:WaitForChild("Humanoid").Health < 15) then
					local targetPos = Vector3.new(-79.51831817626953, 303.7999267578125, -0.435918390750885)
					player.Character:SetPrimaryPartCFrame(CFrame.new(targetPos.X, targetPos.Y, targetPos.Z))
				end
				wait(0)
			end
		else
			toggle.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
			
		end
	end)
end
coroutine.wrap(TOFY_fake_script)()
local function JOMAQ_fake_script() -- LoopKillMostToggle.LocalScript 
	local script = Instance.new('LocalScript', LoopKillMostToggle)

	local player = game.Players.LocalPlayer
	local toggle = player.PlayerGui.TSB.Main.Toggles.LoopKillMostBG.LoopKillToggleBG.LoopKillMostToggle
	local Players = game:GetService("Players")
	
	-- Function to teleport player to a target player
	local function teleportToPlayer(targetPlayer)
		local targetCharacter = targetPlayer.Character
		if targetCharacter then
			local targetPart = targetCharacter.PrimaryPart
			if targetPart then
				player.Character:SetPrimaryPartCFrame(targetPart.CFrame)
			end
		end
	end
	
	-- Function to teleport player to all playerss
	local function teleportToAllPlayers()
		wait(0.5)
		for _, targetPlayer in pairs(Players:GetPlayers()) do
			if targetPlayer ~= player then
				teleportToPlayer(targetPlayer)
				wait(0.07)
			end
		end
		wait(0.09)
		player.Character:SetPrimaryPartCFrame(CFrame.new(99999999999999999999999, 999999999999999999999999, 99999999999999999999999))
		wait(0.1)
		player.Character:SetPrimaryPartCFrame(CFrame.new(99999999999999999999999, 999999999999999999999999, 99999999999999999999999))
		wait(0.1)
		player.Character:SetPrimaryPartCFrame(CFrame.new(99999999999999999999999, 999999999999999999999999, 99999999999999999999999))
		wait(3)
		player.Character:SetPrimaryPartCFrame(CFrame.new(255, 255, 255))
		if player.PlayerGui.TSB.Main.Toggles.SafeZoneBG.SafeZoneToggleBG["Tp To Safe Zone After Kill"].BackgroundColor3 == Color3.fromRGB(50, 50, 50) then
			player.Character:SetPrimaryPartCFrame(CFrame.new(-341.7450866699219, 629.573486328125, 70.05008697509766))
		end
		wait(0.5)
		if player.PlayerGui.TSB.Main.Toggles.SafeZoneBG.SafeZoneToggleBG["Tp To Safe Zone After Kill"].BackgroundColor3 == Color3.fromRGB(50, 50, 50) then
			player.Character:SetPrimaryPartCFrame(CFrame.new(-341.7450866699219, 629.573486328125, 70.05008697509766))
		end
		game:GetService("StarterGui"):SetCore("SendNotification", {
			Title = "immisso",
			Text = "should have killed players, if it didn't then try again. ( someone canceled your move )",
			Duration = 5
		})
		if player.PlayerGui.TSB.Main.Toggles.SafeZoneBG.SafeZoneToggleBG["Tp To Safe Zone After Kill"].BackgroundColor3 == Color3.fromRGB(50, 50, 50) then
			wait(25)
		else
			wait(8)
		end
	end
	
	-- Function to teleport player to a specific CFrame after 1.6 seconds
	local function start()
		if game:GetService("Players").LocalPlayer.Backpack:FindFirstChild("Scatter") == nil then
			game:GetService("StarterGui"):SetCore("SendNotification", {
				Title = "immisso",
				Text = "make sure to play deadly ninja!",
				Duration = 5
			})
		end
		local args = {
			[1] = {
				["Goal"] = "Console Move",
				["Tool"] = game:GetService("Players").LocalPlayer.Backpack.Scatter
			}
		}
		game:GetService("Players").LocalPlayer.Character.Communicate:FireServer(unpack(args))
		teleportToAllPlayers()
	end
	
	script.Parent.MouseButton1Click:Connect(function()
		if toggle.BackgroundColor3 == Color3.fromRGB(39, 39, 39) then
			toggle.BackgroundColor3 = Color3.fromRGB(50, 50, 50)
		else
			toggle.BackgroundColor3 = Color3.fromRGB(39, 39, 39)
		end
		
		while (toggle.BackgroundColor3 == Color3.fromRGB(50, 50, 50)) do
			start()
		end
		
	end)
end
coroutine.wrap(JOMAQ_fake_script)()
